/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 2:37 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Collections;
using System.IO;

namespace SSWamp
{
	/// <summary>
	/// Description of mpApache.
	/// </summary>
	public class MPApache : MonitoredProcess
	{		
		protected override string strAppName { get { return "Apache"; } }
		protected override string strProcessName { get { return "httpd"; } }
		protected override string strFilePath { get { return var.strApacheFilePath; } }
		protected override string strArguments { get { return ""; } }
		protected override string strFolderPath { get { return var.strApacheFolderPath; } }
		protected override int intPort { get { return var.getInt("Apache","numApachePort"); } }
		protected override string strShutdownProcessName { get { return "taskkill"; } }
		protected override string strShutdownProcessPath { get { return ""; } }
		protected override string strShutdownArguments { get { return "/im httpd.exe"; } }
		
		protected override bool configureApp()
		{
			// Need to diable group boxes here
    		
    		// Make either a backup of the conf the first time or restore from a backup
    		string strConf = Path.Combine(var.strApacheFolderPath, @"conf");
    		string strConfBackup = Path.Combine(var.strConfigFolderPath, @"apache");
    		if (!Directory.Exists(strConfBackup))
    		{
    			runCmdWait("xcopy.exe",@"/E /I " + "\""+ strConf +"\"" + " " + "\""+ strConfBackup +"\"","");
    		}
    		else
    		{
    			Directory.Delete(strConf, true);
    			runCmdWait("xcopy.exe",@"/E /I " + "\""+ strConfBackup +"\"" + " " + "\""+ strConf +"\"","");
    		}
    		
    		// Apply the config values from the tab the the config using AWK
    		string strAwkConfig = Path.Combine(var.strApacheFolderPath, @"conf\original\installwinconf.awk");
    		
    		string strArgs = "-f ";
    		strArgs += "\""+ strAwkConfig + "\" ";
    		strArgs += var.getString("Apache","txtDomainName") + " ";
			strArgs += var.getString("Apache","txtServerName") + " ";
			strArgs += var.getString("Apache","txtServerAdmin") + " ";
			strArgs += var.getString("Apache","numApachePort") + " ";
			strArgs += var.getString("Apache","numApachePortSSL") + " ";
			strArgs += "\""+ var.strApacheFolderPath + "\" ";
			strArgs += "\""+ var.getString("Apache","txtSourceRoot") + "\" ";
			strArgs += "\""+ Path.Combine(var.strRootFolderPath, @"webroot\" + var.getString("Apache","txtDomainName") + @"\" + var.strPublicFolderName) + "\" ";
			//File.WriteAllText(Path.Combine(strHomeDir,"test.txt"),strArgs);
			runCmdWait(var.strAWKFilePath,strArgs,var.strAWKFolderPath);
			
			//C:/Users/Joe/Desktop/FusionLeaf_Stack_v0.4.9/app/php/php5apache2_2.dll
			
			//string strGuessRoot = Path.Combine(var.strApacheFolderPath, "htdocs").Replace('\\','/');
			//string strRealRoot = Path.Combine(var.strRootFolderPath, @"webroot\" + var.getString("Apache","txtDomainName") + @"\" + var.strPublicFolderName);
			
			//PHPIniDir "C:/Users/Joe/Desktop/FusionLeaf_Stack_v0.4.9/app/php"
			
			string strSSLDLL = Path.Combine(var.strPHPTSFolderPath, "ssleay32.dll").Replace('\\','/');
			string strSSLDLL2 = Path.Combine(var.strPHPTSFolderPath, "libsasl.dll").Replace('\\','/');
			
			string strApacheConfig = Path.Combine(var.strApacheFolderPath,@"conf\httpd.conf");
			ArrayList alReplace = new ArrayList();
			//alReplace.Add(new string[]{"#LoadModule rewrite_module", "LoadModule rewrite_module"});
			alReplace.Add(new string[]{"#%PHPMODULE%", "LoadModule php5_module \""
			              		+ Path.Combine(var.strPHPTSFolderPath,"php5apache2_4.dll").Replace('\\','/') + "\""});
			alReplace.Add(new string[]{"#%SSLDLL%", "LoadFile \""+ strSSLDLL +"\"" + Environment.NewLine + "LoadFile \""+ strSSLDLL2 +"\""});
			//alReplace.Add(new string[]{strGuessRoot, strRealRoot});
			alReplace.Add(new string[]{"AllowOverride None", "AllowOverride All"});
			alReplace.Add(new string[]{"#%ERRDOC404%", "ErrorDocument 404 \"404 not found\""});
			alReplace.Add(new string[]{"#%ERRDOC403%", "ErrorDocument 403 \"403 forbidden\""});
			alReplace.Add(new string[]{"Options Indexes FollowSymLinks", "Options FollowSymLinks"});
			alReplace.Add(new string[]{"DirectoryIndex index.html", "DirectoryIndex index.php index.html"});
			alReplace.Add(new string[]{"#%PHPADDTYPE%", "AddType application/x-httpd-php .php"});
			alReplace.Add(new string[]{"#%PHPDIR%", "PHPIniDir \""+ var.strPHPTSFolderPath.Replace('\\','/') +"\""});
			
			if (var.getBool("Application","cbUseSSL"))
			{
				// Copy the SSL certificates
				string strSSLPath = Path.Combine(var.strConfigFolderPath, "ssl");
				if (File.Exists(Path.Combine(strSSLPath, "server.crt")))
				{
					File.Copy(Path.Combine(strSSLPath, "server.crt"), Path.Combine(var.strApacheFolderPath,@"conf\server.crt"));				
				}
				
				if (File.Exists(Path.Combine(strSSLPath, "server.key")))
				{
					File.Copy(Path.Combine(strSSLPath, "server.key"), Path.Combine(var.strApacheFolderPath,@"conf\server.key"));
				}
				
				alReplace.Add(new string[]{"#LoadModule ssl_module modules/mod_ssl.so", "LoadModule ssl_module modules/mod_ssl.so"});
				alReplace.Add(new string[]{"#%SSLInclude%", "Include"});
				
			}
			
			File.WriteAllText(strApacheConfig, var.replaceText(File.ReadAllText(strApacheConfig),alReplace));

			//#%PHPADDTYPE%
			
			//PHPIniDir "C:/Users/Joe/Desktop/FusionLeaf_Stack_v0.4.9/app/php"
			//DirectoryIndex index.php index.html
			//DirectoryIndex index.html
			//AllowOverride None
			//#LoadModule rewrite_module modules/mod_rewrite.so
			//LoadModule php5_module "C:/Users/Joe/Desktop/FusionLeaf_Stack_v0.4.9/app/php/php5apache2_2.dll"
			//LoadFile "C:/Users/Joe/Desktop/FusionLeaf_Stack_v0.4.9/app/php/ssleay32.dll"
			
			//TODO: Add a check that will return false if something is wrong
			
			return true;
		}
	}
}
