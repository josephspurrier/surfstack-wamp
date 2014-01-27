/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 9:47 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Collections;
using System.IO;

namespace SSWamp
{
	/// <summary>
	/// Description of MPNginx.
	/// </summary>
	public class MPNginx : MonitoredProcess
	{
		protected override string strAppName { get { return "Nginx"; } }
		protected override string strProcessName { get { return "nginx"; } }
		protected override string strFilePath { get { return var.strNginxFilePath; } }
		protected override string strArguments { get { return ""; } }
		protected override string strFolderPath { get { return var.strNginxFolderPath; } }
		protected override int intPort { get { return var.getInt("Nginx","numNginxPort"); } }
		protected override string strShutdownProcessName { get { return "nginx"; } }
		protected override string strShutdownProcessPath { get { return var.strNginxFolderPath; } }
		protected override string strShutdownArguments { get { return "-s stop"; } }
		
		protected override bool configureApp()
		{    		
    		int phpThreads = var.getInt("PHP","numPHPThreads");
    		int phpPort = var.getInt("PHP","numPHPPort");
    		
			ArrayList alReplace = new ArrayList();
			alReplace.Add(new string[]{"%WEBROOT%", var.strWebrootFolderPath.Replace(@"\","/")});
			alReplace.Add(new string[]{"%WEBPORT%", var.getString("Nginx","numNginxPort")});
			alReplace.Add(new string[]{"%THREADS%", buildFarm(phpThreads, phpPort)});
			
			//alReplace.Add(new string[]{"%SSLPORT%", var.getString("Nginx","numNginxSSLPort")});
			alReplace.Add(new string[]{"%SSLPATH%", Path.Combine(var.strConfigFolderPath, "ssl").Replace(@"\","/")});
			
			if (var.getBool("Application","cbUseSSL"))
			{
				alReplace.Add(new string[]{"#listen 443 ssl", "listen " + var.getString("Apache","numApachePortSSL") + " ssl"});
				alReplace.Add(new string[]{"#ssl_certificate", "ssl_certificate"});
				alReplace.Add(new string[]{"#ssl_certificate_key", "ssl_certificate_key"});
			}
			
			File.WriteAllText(var.strNginxConfigFilePath, var.replaceText(File.ReadAllText(var.strNginxTemplateConfigFilePath),alReplace));

    		return true;
		}
		
        private string buildFarm(int threads, int port)
        {
        	string output = "";
        	for(int i = port; i < (port + threads); i++)
        	{
        		output += "server 127.0.0.1:"+i+" weight=1 fail_timeout=5s;" + Environment.NewLine;
        	}
        	return output;
        }
	}
}
