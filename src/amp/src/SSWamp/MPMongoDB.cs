/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 10/04/2013
 * Time: 12:48 AM
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
	/// Description of MPMongoDB.
	/// </summary>
	public class MPMongoDB : MonitoredProcess
	{
		Variables var;
		protected override string strAppName { get { return "MongoDB"; } }
		protected override string strProcessName { get { return "mongod"; } }
		protected override string strFilePath { get { return var.strMongoDBFilePath; } }
		protected override string strArguments { get { return "--port "+var.getString("MongoDB","numMongoDBPort")+
					" --dbpath data "+var.getString("MongoDB","txtMongoDBArgs"); } }
		protected override string strFolderPath { get { return var.strMongoDBFolderPath; } }
		protected override int intPort { get { return var.getInt("MongoDB","numMongoDBPort"); } }
		protected override string strShutdownProcessName { get { return "mongo"; } }
		protected override string strShutdownProcessPath { get { return var.strMongoDBFolderPath; } }
		protected override string strShutdownArguments { get { return "admin --eval db.shutdownServer()"; } }
		
		public MPMongoDB(Variables v)
		{
			var = v;
		}
		
		protected override bool configureApp()
		{			
			string dir = Path.Combine(var.strMongoDBFolderPath, "data");
			if (!Directory.Exists(dir)) Directory.CreateDirectory(dir);
			
			//MessageBox.Show(strArguments);
    		
    		return true;
		}
	}
}
