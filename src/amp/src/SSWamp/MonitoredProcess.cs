/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 1:25 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
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
	/// Description of MonitoredProcess.
	/// </summary>
	abstract public class MonitoredProcess
	{
		bool blDead = false;
		
		Thread threadApp;
		int threadSleep = 300;
		Control con;
		
		int intPID;
		
		abstract protected string strAppName { get; }
		abstract protected string strProcessName { get; }
		abstract protected string strFilePath { get; }
		abstract protected string strArguments { get; }
		abstract protected string strFolderPath { get; }
		abstract protected int intPort { get; }
		abstract protected string strShutdownProcessName { get; }
		abstract protected string strShutdownProcessPath { get; }
		abstract protected string strShutdownArguments { get; }
		
		abstract protected bool configureApp();
		
		public void attach(Control c)
		{
			con = c;
			con.BackColor = Variables.cYellow;
		}
		
		List<ManagedProcess> listMAP = new List<ManagedProcess>();
		
		public void bind(ManagedProcess map)
		{
			listMAP.Add(map);
		}
		
		private void destroyBindings()
		{
			for (int i = listMAP.Count-1; i >= 0; i--)
			{
				if (listMAP[i].isAlive()) listMAP[i].kill();
				listMAP.RemoveAt(i);
			}
		}
		
		public void start()
		{
			if (!isEnvironmentReady()) return;
			if (!configureApp()) return;
			runApp();
		}
		
		public void kill()
		{
			blDead = true;
			destroyBindings();
		}
		
		public bool isAlive()
		{
			return !blDead;
		}
		
		private void runApp()
		{			
    		intPID = runCmd(strFilePath, strArguments, strFolderPath);
    		//txtStatus.Text = "Apache started on port " + numApachePort.Value.ToString() + ".";
			threadApp = new Thread(new ThreadStart(monitorApp));
			threadApp.IsBackground=true;
			threadApp.Start();
		}
		
        private void monitorApp()
        {
        	bool threadIsRunning = false;
        	Color cCurrent = Variables.cYellow;
        	
        	do
        	{
	        	threadIsRunning = pidIsRunning();
	        	if (threadIsRunning)
	        	{
	        		if (cCurrent!=Variables.cGreen) con.Invoke((MethodInvoker) (() => con.BackColor = Variables.cGreen));
	        		
	        		if (blDead)
	        		{
	        			runCmdWait(strShutdownProcessName, strShutdownArguments, strShutdownProcessPath);
	        			while (pidIsRunning()) Thread.Sleep(threadSleep);
	        			//runCmd("taskkill",@"/pid " + intPID + @" /F /T","");
	        		}
	        	}
	        	else
	        	{
	        		if (cCurrent!=Variables.cRed) con.Invoke((MethodInvoker) (() => con.BackColor = Variables.cRed));
	        	}
        		Thread.Sleep(threadSleep);
        	} while(threadIsRunning);
        	
        	blDead = true;
        }
		
		private bool isEnvironmentReady()
		{			
			if (!isPortAvailable(intPort))
			{
				MessageBox.Show("Port " + intPort + " is not available.");
				return false;
			}
			
        	if (processIsRunning(strProcessName))
        	{
				MessageBox.Show("An instance of " + strProcessName + " is already running.");
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
        
        private bool processIsRunning(string process)
        {
        	return (System.Diagnostics.Process.GetProcessesByName(process).Length != 0);
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
                //if (chbHide.Checked) p.StartInfo.WindowStyle = ProcessWindowStyle.Hidden;
                p.StartInfo.WindowStyle = ProcessWindowStyle.Hidden;
               	//p.StartInfo.WindowStyle = ProcessWindowStyle.Normal;
        	    p.StartInfo.FileName = name;
                p.StartInfo.WorkingDirectory = folder;
                p.StartInfo.Arguments = arguments;
                p.Start();
                return p.Id;
        }
        
        protected void runCmdWait(string name, string arguments, string folder)
        {
        	    Process p = new Process();
                //if (chbHide.Checked) p.StartInfo.WindowStyle = ProcessWindowStyle.Hidden;
                p.StartInfo.WindowStyle = ProcessWindowStyle.Hidden;
        	    p.StartInfo.FileName = name;
                p.StartInfo.WorkingDirectory = folder;
                p.StartInfo.Arguments = arguments;
                p.Start();
                p.WaitForExit();
        }
	}
}
