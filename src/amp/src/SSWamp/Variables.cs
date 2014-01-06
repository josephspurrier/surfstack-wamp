/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 3:48 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Collections;
using System.Drawing;
using System.IO;
using System.Windows.Forms;

namespace SSWamp
{
	/// <summary>
	/// Description of Variables.
	/// </summary>
	public class Variables
	{		
		public string strRootFolderPath;
		public string strWebrootFolderPath;
		public string strAMPFolderPath;
		public string strAppFolderPath;
		public string strConfigFolderPath;
		
		// PHP
		public string strPHPTSFolderPath;
		public string strPHPTSConfigFilePath;
		public string strPHPTemplateConfigFilePath;
		public string strPHPNTSFolderPath;
		public string strPHPNTSConfigFilePath;
		public string strPHPNTSCGIFilePath;
		
		// Apache
		public string strApacheFolderPath;
		public string strApacheFilePath;
		public string strApacheConfigFilePath;
		public string strApacheTemplateConfigFilePath;
		
		// AWK
		public string strAWKFolderPath;
		public string strAWKFilePath;
		public string strAWKConfigFilePath;
		
		// Webfolder
		public string strPublicFolderName = "public";
		
		// MongoDB
		public string strMongoDBFolderPath;
		public string strMongoDBFilePath;
		//public string strMongoDBConfigFilePath;
		//public string strMongoDBTemplateConfigFilePath;
		
		// MySQL
		public string strMySQLFolderPath;
		public string strMySQLFilePath;
		public string strMySQLConfigFilePath;
		public string strMySQLTemplateConfigFilePath;
		
		// Memcached
		public string strMemcachedFolderPath;
		public string strMemcachedFilePath;

		// Nginx		
        public string strNginxFolderPath;
        public string strNginxFilePath;
        public string strNginxConfigFilePath;
        public string strNginxTemplateConfigFilePath;
		
		string configFolderPath;
		string configFilePath;
		string configDefaultFilePath;
		
		public static Color cGreen = Color.FromArgb(255,92,184,92);
		public static Color cGray = Color.FromArgb(255,153,153,153);
		public static Color cYellow = Color.FromArgb(255,240,173,78);
		public static Color cRed = Color.FromArgb(255,217,83,79);
		
		Ini ini;
		enum IniMode {Read, Write};
		
		public Variables(string root)
		{
			strRootFolderPath = root;
			strWebrootFolderPath = Path.Combine(strRootFolderPath, "webroot");
            strAMPFolderPath = Path.Combine(strRootFolderPath, "amp");
            strAppFolderPath = Path.Combine(strAMPFolderPath, "app");
            strConfigFolderPath = Path.Combine(strAMPFolderPath, "config");
            
			// PHP
			strPHPTSFolderPath = Path.Combine(strAppFolderPath, "phpts");
			strPHPTSConfigFilePath = Path.Combine(strPHPTSFolderPath, "php.ini");
			strPHPTemplateConfigFilePath = Path.Combine(strConfigFolderPath, "php.ini");
			strPHPNTSFolderPath = Path.Combine(strAppFolderPath, "phpnts");
			strPHPNTSConfigFilePath = Path.Combine(strPHPNTSFolderPath, "php.ini");
			strPHPNTSCGIFilePath = Path.Combine(strPHPNTSFolderPath, "php-cgi.exe");
			
			// Apache
			strApacheFolderPath = Path.Combine(strAppFolderPath, "apache");
			strApacheFilePath = Path.Combine(strApacheFolderPath,Path.Combine("bin", "httpd.exe"));
			strApacheConfigFilePath = Path.Combine(strApacheFolderPath,Path.Combine("conf", "httpd.conf"));
			strApacheTemplateConfigFilePath = Path.Combine(strConfigFolderPath,@"apache\original\httpd.conf.in");
			
			strAWKFolderPath = Path.Combine(strAppFolderPath, "awk");
			strAWKFilePath = Path.Combine(strAWKFolderPath, "awk.exe");
			strAWKConfigFilePath = Path.Combine(strConfigFolderPath, @"conf\original\installwinconf.awk");

			// MongoDB
			strMongoDBFolderPath = Path.Combine(strAppFolderPath, Path.Combine("mongodb","bin"));
			strMongoDBFilePath = Path.Combine(strMongoDBFolderPath, "mongod.exe");
			//strMongoDBConfigFilePath = Path.Combine(strMySQLFolderPath, "my.ini");
			//strMongoDBTemplateConfigFilePath = Path.Combine(strConfigFolderPath, "my.ini");
			
			// MySQL
			strMySQLFolderPath = Path.Combine(strAppFolderPath, "mysql");
			strMySQLFilePath = Path.Combine(strMySQLFolderPath, Path.Combine("bin","mysqld.exe"));
			strMySQLConfigFilePath = Path.Combine(strMySQLFolderPath, "my.ini");
			strMySQLTemplateConfigFilePath = Path.Combine(strConfigFolderPath, "my.ini");
			
			// Memcached
			strMemcachedFolderPath =  Path.Combine(strAppFolderPath, "memcached");
    		strMemcachedFilePath =  Path.Combine(strMemcachedFolderPath, "memcached.exe");
    		
    		// Nginx
            strNginxFolderPath = Path.Combine(strAppFolderPath, "nginx");
            strNginxFilePath = Path.Combine(strNginxFolderPath, "nginx.exe");
            strNginxConfigFilePath = Path.Combine(strNginxFolderPath, Path.Combine("conf","nginx.conf"));
            strNginxTemplateConfigFilePath = Path.Combine(strConfigFolderPath, "nginx.conf");
			
			configFolderPath = strConfigFolderPath;
			configFilePath = Path.Combine(configFolderPath, "ss.ini");
			configDefaultFilePath = Path.Combine(configFolderPath, "ssdefault.ini");
			
			ini = new Ini(configFilePath);
		}
		
		public void resetDefaults()
		{
			ini = new Ini(configDefaultFilePath);
		}
		
		public void reinitialize()
		{
			ini = new Ini(configFilePath);
		}
		
		private void store(string strSection, string strKey, string strValue)
		{
			ini.IniWriteValue(strSection,strKey,strValue);
		}
		
		private string retrieve(string strSection, string strKey)
		{
			return ini.IniReadValue(strSection,strKey);
		}
		
		private string retrieveBoolean(string strSection, string strKey)
		{			
			string value = ini.IniReadValue(strSection,strKey);
			
			if (value=="") value = "false";
			
			return value;
		}
		
		private string retrieveDecimal(string strSection, string strKey)
		{			
			string value = ini.IniReadValue(strSection,strKey);
			
			if (value=="") value = "0";
			
			return value;
		}
		
		public string getString(string strSection, string strKey)
		{
			return retrieve(strSection, strKey);
		}
		
		public int getInt(string strSection, string strKey)
		{
			return Convert.ToInt32(retrieve(strSection, strKey));
		}
    	
    	public bool isConfigurationReady()
    	{            
			if (!File.Exists(configFilePath))
			{
            	MessageBox.Show("The WAMP configuration file, " + configFilePath + " cannot be found");
            	return false;
			}
			
			return true;
    	}
    	
		public void saveControls(Control con)
		{
			ioHandle(con, IniMode.Write);
		}
		
		public void loadControls(Control con)
		{
			ioHandle(con, IniMode.Read);
		}
		
		//TODO This method does not do any type checking
		private void ioHandle(Control con, IniMode im)
		{
			foreach (Control c in con.Controls)
			{
				string strSection = con.Text;
				
				// Any control with the "exclude" tag will not be saved
				if (c.Tag != null && c.Tag.ToString()=="exclude") continue;
				
                if (c.GetType().ToString() == "System.Windows.Forms.TextBox")
                {
                	if (im == IniMode.Write) store(strSection,c.Name,c.Text);
                	else if (im == IniMode.Read) ((TextBox)c).Text = retrieve(strSection,c.Name);
                }
                else if (c.GetType().ToString() == "System.Windows.Forms.NumericUpDown")
                {
                	if (im == IniMode.Write) store(strSection,c.Name,((NumericUpDown)c).Value.ToString());
                	else if (im == IniMode.Read) ((NumericUpDown)c).Value = Convert.ToDecimal(retrieveDecimal(strSection,c.Name));
                }
                else if (c.GetType().ToString() == "System.Windows.Forms.RadioButton")
                {
                	if (im == IniMode.Write) store(strSection,c.Name,((RadioButton)c).Checked.ToString());
                	else if (im == IniMode.Read) ((RadioButton)c).Checked = Convert.ToBoolean(retrieveBoolean(strSection,c.Name));
                }
                else if (c.GetType().ToString() == "System.Windows.Forms.CheckBox")
                {
                	if (im == IniMode.Write) store(strSection,c.Name,((CheckBox)c).Checked.ToString());
                	else if (im == IniMode.Read) ((CheckBox)c).Checked = Convert.ToBoolean(retrieveBoolean(strSection,c.Name));
                }
            }
		}
		
        // Replaces the text
        public string replaceText(string text, ArrayList al)
        {
        	string output = text;
        	for (int j = 0;j<al.Count;j++)
        	{
        		string[] s = (string[])al[j];
        		output = output.Replace(s[0],s[1]);
        	}
        	return output;
        }
	}
}
