/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 9:09 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Collections;
using System.IO;

namespace SSWamp
{
	/// <summary>
	/// Description of MPMySQL.
	/// </summary>
	public class MPMySQL : MonitoredProcess
	{
		protected override string strAppName { get { return "MySQL"; } }
		protected override string strProcessName { get { return "mysqld"; } }
		protected override string strFilePath { get { return var.strMySQLFilePath; } }
		protected override string strArguments { get { return "--defaults-file=\"" + var.strMySQLConfigFilePath + "\""; } }
		protected override string strFolderPath { get { return var.strMySQLFolderPath; } }
		protected override int intPort { get { return var.getInt("MySQL","numMySQLPort"); } }
		// It beeps...but I fixed it with a wait!!
		protected override string strShutdownProcessName { get { return "mysqladmin"; } }
		protected override string strShutdownProcessPath { get { return Path.Combine(var.strMySQLFolderPath, "bin"); } }
		protected override string strShutdownArguments { get { return "-u root shutdown _"; } }
		//protected override string strShutdownProcessName { get { return "taskkill"; } }
		//protected override string strShutdownProcessPath { get { return ""; } }
		//protected override string strShutdownArguments { get { return "/im mysqld.exe /f"; } }
		
		protected override bool configureApp()
		{        
			ArrayList alReplace = new ArrayList();
			alReplace.Add(new string[]{"%MYSQLPORT%", var.getString("MySQL","numMySQLPort")});
			File.WriteAllText(var.strMySQLConfigFilePath, var.replaceText(File.ReadAllText(var.strMySQLTemplateConfigFilePath),alReplace));
    		
    		return true;
		}
	}
}
