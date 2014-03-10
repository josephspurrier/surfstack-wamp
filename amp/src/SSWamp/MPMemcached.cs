/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 9:36 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;

namespace SSWamp
{
	/// <summary>
	/// Description of MPMemcached.
	/// </summary>
	public class MPMemcached : MonitoredProcess
	{
		protected override string strAppName { get { return "Memcached"; } }
		protected override string strProcessName { get { return "memcached"; } }
		protected override string strFilePath { get { return var.strMemcachedFilePath; } }
		protected override string strArguments { get { return "-p "+var.getString("Memcached","numMemcachedPort"); } }
		protected override string strFolderPath { get { return var.strMemcachedFolderPath; } }
		protected override int intPort { get { return var.getInt("Memcached","numMemcachedPort"); } }
		protected override string strShutdownProcessName { get { return "taskkill"; } }
		protected override string strShutdownProcessPath { get { return ""; } }
		protected override string strShutdownArguments { get { return "/im memcached.exe"; } }
		
		protected override bool configureApp()
		{
    		return true;
		}
	}
}
