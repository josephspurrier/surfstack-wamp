/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 10:14 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Collections;
using System.Collections.Generic;
using System.Diagnostics;
using System.Drawing;
using System.Net;
using System.Net.Sockets;
using System.Threading;
using System.Windows.Forms;

namespace SSWamp
{
	/// <summary>
	/// Process that will restart if killed.
	/// </summary>
	public class ManagedProcess
	{
		bool blDead = false;
		Thread threadApp;
		int threadSleep = 300;
		int intPID;
		
		private string strFilePath;
		private string strArguments;
		private string strFolderPath;
		private int intPort;
		
		protected Variables var;
		
		public void attachVar(Variables v)
		{
			var = v;
		}
		
		public void start(string FilePath, string Arguments, string FolderPath, int Port)
		{
			strFilePath = FilePath;
			strArguments = Arguments;
			strFolderPath = FolderPath;
			intPort = Port;
			
			if (!isEnvironmentReady()) return;
			restart();
		}
		
		private void restart()
		{			
    		intPID = runCmd(strFilePath, strArguments, strFolderPath);
			threadApp = new Thread(new ThreadStart(monitorApp));
			threadApp.IsBackground=true;
			threadApp.Start();
		}
		
		public void kill()
		{
			blDead = true;
		}
		
		public bool isAlive()
		{
			return !blDead;
		}
		
        private void monitorApp()
        {
        	bool blReadyforDeath = false;
        	bool threadIsRunning = true;
        	
        	do
        	{
        		threadIsRunning = pidIsRunning();
	        	if (!threadIsRunning && !blDead)
	        	{
	        		restart();
	        		break;
	        	}
        		else if (blDead)
        		{
        			runCmd("taskkill",@"/pid " + intPID + @" /F /T","");
        			blReadyforDeath = true;
        		}
        		Thread.Sleep(threadSleep);
        	} while(threadIsRunning && blReadyforDeath==false);
        }
        		
		private bool isEnvironmentReady()
		{			
			if (!isPortAvailable(intPort))
			{
				MessageBox.Show("Port " + intPort + " is not available.");
				return false;
			}
        	
        	return true;
		}
		
        private bool isPortAvailable(int port)
        {
            try
            {
                TcpListener tcpListener = new TcpListener(IPAddress.Any, port);
                tcpListener.Start();
                tcpListener.Stop();
            }
            catch
            {
                return false;
            }
            return true;
        }
        
        private bool pidIsRunning()
        {
        	try { System.Diagnostics.Process.GetProcessById(intPID); }
        	catch { return false; }
        	return true;
        }
        
        protected int runCmd(string name, string arguments, string folder)
        {
        	    Process p = new Process();
                if (var.getBool("Application","cbShowCMD"))
                {
                	p.StartInfo.WindowStyle = ProcessWindowStyle.Normal;
                }
                else
                {
					p.StartInfo.WindowStyle = ProcessWindowStyle.Hidden;                	
                }
                
        	    p.StartInfo.FileName = name;
                p.StartInfo.WorkingDirectory = folder;
                p.StartInfo.Arguments = arguments;
                p.Start();
                return p.Id;
        }
	}
}
