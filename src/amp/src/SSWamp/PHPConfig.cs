/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 2:38 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Collections;
using System.IO;
using System.Windows.Forms;

namespace SSWamp
{
	/// <summary>
	/// Description of frmPHP.
	/// </summary>
	public class PHPConfig
	{
		Variables var;
		
		public PHPConfig(Variables v)
		{
			var = v;
		}
		
        public bool isPHPReady()
        {            
            if (!File.Exists(var.strPHPTemplateConfigFilePath))
            {
            	MessageBox.Show("The PHP template file, " + var.strPHPTemplateConfigFilePath + " cannot be found");
            	return false;
            }
            /*if (!File.Exists(var.strPHPTSConfigFilePath))
            {
            	MessageBox.Show("The PHP configuration file, " +  var.strPHPTSConfigFilePath + " cannot be found");
            	return false;
            }
            if (!File.Exists(var.strPHPNTSConfigFilePath))
            {
            	MessageBox.Show("The PHP configuration file, " + var.strPHPNTSConfigFilePath + " cannot be found");
            	return false;
            }*/
        
            // Thread-safe PHP config
            ArrayList alReplace = new ArrayList();
            alReplace.Add(new string[]{";%INCLUDE_PATH%", "include_path=\".;"+var.strPHPTSFolderPath+"\\pear\""});
            alReplace.Add(new string[]{"%EXTDIR%", Path.Combine(var.strPHPTSFolderPath, "ext")});
			File.WriteAllText(var.strPHPTSConfigFilePath, var.replaceText(File.ReadAllText(var.strPHPTemplateConfigFilePath),alReplace));
			
			// Non thread-safe PHP config
			alReplace.Clear();
			alReplace.Add(new string[]{";%INCLUDE_PATH%", "include_path=\".;"+var.strPHPNTSFolderPath+"\\pear\""});
			alReplace.Add(new string[]{"%EXTDIR%", Path.Combine(var.strPHPNTSFolderPath, "ext")});
			File.WriteAllText(var.strPHPNTSConfigFilePath, var.replaceText(File.ReadAllText(var.strPHPTemplateConfigFilePath),alReplace));
			
			Environment.SetEnvironmentVariable("PHP_FCGI_MAX_REQUESTS",var.getString("PHP","numPHPRequests"));
			
			return true;
        }
        

	}
}
