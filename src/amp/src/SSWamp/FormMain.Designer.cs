/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 12:22 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
namespace SSWamp
{
	partial class MainForm
	{
		/// <summary>
		/// Designer variable used to keep track of non-visual components.
		/// </summary>
		private System.ComponentModel.IContainer components = null;
		
		/// <summary>
		/// Disposes resources used by the form.
		/// </summary>
		/// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
		protected override void Dispose(bool disposing)
		{
			if (disposing) {
				if (components != null) {
					components.Dispose();
				}
			}
			base.Dispose(disposing);
		}
		
		/// <summary>
		/// This method is required for Windows Forms designer support.
		/// Do not change the method contents inside the source code editor. The Forms designer might
		/// not be able to load this method if it was changed manually.
		/// </summary>
		private void InitializeComponent()
		{
			this.btnStartStop = new System.Windows.Forms.Button();
			this.btnExit = new System.Windows.Forms.Button();
			this.msTop = new System.Windows.Forms.MenuStrip();
			this.editToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.startupConfigurationsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.databaseToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.mySQLToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.languageToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.pHPTSApacheToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.pHPNTSNginxToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.webToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.apacheToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.nginxToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.viewToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.runningConfigurationsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.databaseToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
			this.mySQLToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
			this.languageToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
			this.pHPTSApacheToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
			this.pHPNTSNginxToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
			this.webToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
			this.apacheToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
			this.nginxToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
			this.exploreToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.openParentFolderToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.databaseToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
			this.mySQLToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
			this.mongoDBToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.languageToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
			this.pHPTSApacheToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
			this.pHPNTSNginxToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
			this.webToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
			this.apacheToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
			this.nginxToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
			this.cacheToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.memcachedToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.settingsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.aboutToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.versionToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.copyrightToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.licensedUnderToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.surfStackWebsiteToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
			this.btnBrowseMain = new System.Windows.Forms.Button();
			this.gbStatus = new System.Windows.Forms.GroupBox();
			this.cbMongoDB = new System.Windows.Forms.CheckBox();
			this.cMongoDB = new System.Windows.Forms.Label();
			this.cbNginx = new System.Windows.Forms.CheckBox();
			this.cNginx = new System.Windows.Forms.Label();
			this.cbApache = new System.Windows.Forms.CheckBox();
			this.cApache = new System.Windows.Forms.Label();
			this.cbMemcached = new System.Windows.Forms.CheckBox();
			this.cbMySQL = new System.Windows.Forms.CheckBox();
			this.cMemcached = new System.Windows.Forms.Label();
			this.cMySQL = new System.Windows.Forms.Label();
			this.msTop.SuspendLayout();
			this.gbStatus.SuspendLayout();
			this.SuspendLayout();
			// 
			// btnStartStop
			// 
			this.btnStartStop.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Left)));
			this.btnStartStop.Location = new System.Drawing.Point(12, 139);
			this.btnStartStop.Name = "btnStartStop";
			this.btnStartStop.Size = new System.Drawing.Size(131, 23);
			this.btnStartStop.TabIndex = 0;
			this.btnStartStop.Text = "Turn On Server(s)";
			this.btnStartStop.UseVisualStyleBackColor = true;
			this.btnStartStop.Click += new System.EventHandler(this.BtnStartStopClick);
			// 
			// btnExit
			// 
			this.btnExit.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Left)));
			this.btnExit.Location = new System.Drawing.Point(288, 139);
			this.btnExit.Name = "btnExit";
			this.btnExit.Size = new System.Drawing.Size(131, 23);
			this.btnExit.TabIndex = 3;
			this.btnExit.Text = "Exit";
			this.btnExit.UseVisualStyleBackColor = true;
			this.btnExit.Click += new System.EventHandler(this.BtnExitClick);
			// 
			// msTop
			// 
			this.msTop.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.editToolStripMenuItem,
									this.viewToolStripMenuItem,
									this.exploreToolStripMenuItem,
									this.settingsToolStripMenuItem,
									this.aboutToolStripMenuItem});
			this.msTop.Location = new System.Drawing.Point(0, 0);
			this.msTop.Name = "msTop";
			this.msTop.Size = new System.Drawing.Size(431, 24);
			this.msTop.TabIndex = 4;
			this.msTop.Text = "menuStrip1";
			// 
			// editToolStripMenuItem
			// 
			this.editToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.startupConfigurationsToolStripMenuItem,
									this.databaseToolStripMenuItem,
									this.languageToolStripMenuItem,
									this.webToolStripMenuItem});
			this.editToolStripMenuItem.Name = "editToolStripMenuItem";
			this.editToolStripMenuItem.Size = new System.Drawing.Size(39, 20);
			this.editToolStripMenuItem.Text = "Edit";
			// 
			// startupConfigurationsToolStripMenuItem
			// 
			this.startupConfigurationsToolStripMenuItem.Enabled = false;
			this.startupConfigurationsToolStripMenuItem.Name = "startupConfigurationsToolStripMenuItem";
			this.startupConfigurationsToolStripMenuItem.Size = new System.Drawing.Size(189, 22);
			this.startupConfigurationsToolStripMenuItem.Text = "Startup Configuration";
			// 
			// databaseToolStripMenuItem
			// 
			this.databaseToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.mySQLToolStripMenuItem});
			this.databaseToolStripMenuItem.Name = "databaseToolStripMenuItem";
			this.databaseToolStripMenuItem.Size = new System.Drawing.Size(189, 22);
			this.databaseToolStripMenuItem.Text = "Database";
			// 
			// mySQLToolStripMenuItem
			// 
			this.mySQLToolStripMenuItem.Name = "mySQLToolStripMenuItem";
			this.mySQLToolStripMenuItem.Size = new System.Drawing.Size(112, 22);
			this.mySQLToolStripMenuItem.Text = "MySQL";
			this.mySQLToolStripMenuItem.Click += new System.EventHandler(this.MySQLToolStripMenuItemClick);
			// 
			// languageToolStripMenuItem
			// 
			this.languageToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.pHPTSApacheToolStripMenuItem,
									this.pHPNTSNginxToolStripMenuItem});
			this.languageToolStripMenuItem.Name = "languageToolStripMenuItem";
			this.languageToolStripMenuItem.Size = new System.Drawing.Size(189, 22);
			this.languageToolStripMenuItem.Text = "Language";
			// 
			// pHPTSApacheToolStripMenuItem
			// 
			this.pHPTSApacheToolStripMenuItem.Name = "pHPTSApacheToolStripMenuItem";
			this.pHPTSApacheToolStripMenuItem.Size = new System.Drawing.Size(164, 22);
			this.pHPTSApacheToolStripMenuItem.Text = "PHP TS (Apache)";
			this.pHPTSApacheToolStripMenuItem.Click += new System.EventHandler(this.PHPTSApacheToolStripMenuItemClick);
			// 
			// pHPNTSNginxToolStripMenuItem
			// 
			this.pHPNTSNginxToolStripMenuItem.Name = "pHPNTSNginxToolStripMenuItem";
			this.pHPNTSNginxToolStripMenuItem.Size = new System.Drawing.Size(164, 22);
			this.pHPNTSNginxToolStripMenuItem.Text = "PHP NTS (Nginx)";
			this.pHPNTSNginxToolStripMenuItem.Click += new System.EventHandler(this.PHPNTSNginxToolStripMenuItemClick);
			// 
			// webToolStripMenuItem
			// 
			this.webToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.apacheToolStripMenuItem,
									this.nginxToolStripMenuItem});
			this.webToolStripMenuItem.Name = "webToolStripMenuItem";
			this.webToolStripMenuItem.Size = new System.Drawing.Size(189, 22);
			this.webToolStripMenuItem.Text = "Web";
			// 
			// apacheToolStripMenuItem
			// 
			this.apacheToolStripMenuItem.Name = "apacheToolStripMenuItem";
			this.apacheToolStripMenuItem.Size = new System.Drawing.Size(114, 22);
			this.apacheToolStripMenuItem.Text = "Apache";
			this.apacheToolStripMenuItem.Click += new System.EventHandler(this.ApacheToolStripMenuItemClick);
			// 
			// nginxToolStripMenuItem
			// 
			this.nginxToolStripMenuItem.Name = "nginxToolStripMenuItem";
			this.nginxToolStripMenuItem.Size = new System.Drawing.Size(114, 22);
			this.nginxToolStripMenuItem.Text = "Nginx";
			this.nginxToolStripMenuItem.Click += new System.EventHandler(this.NginxToolStripMenuItemClick);
			// 
			// viewToolStripMenuItem
			// 
			this.viewToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.runningConfigurationsToolStripMenuItem,
									this.databaseToolStripMenuItem1,
									this.languageToolStripMenuItem1,
									this.webToolStripMenuItem1});
			this.viewToolStripMenuItem.Name = "viewToolStripMenuItem";
			this.viewToolStripMenuItem.Size = new System.Drawing.Size(44, 20);
			this.viewToolStripMenuItem.Text = "View";
			// 
			// runningConfigurationsToolStripMenuItem
			// 
			this.runningConfigurationsToolStripMenuItem.Enabled = false;
			this.runningConfigurationsToolStripMenuItem.Name = "runningConfigurationsToolStripMenuItem";
			this.runningConfigurationsToolStripMenuItem.Size = new System.Drawing.Size(196, 22);
			this.runningConfigurationsToolStripMenuItem.Text = "Running Configuration";
			// 
			// databaseToolStripMenuItem1
			// 
			this.databaseToolStripMenuItem1.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.mySQLToolStripMenuItem1});
			this.databaseToolStripMenuItem1.Name = "databaseToolStripMenuItem1";
			this.databaseToolStripMenuItem1.Size = new System.Drawing.Size(196, 22);
			this.databaseToolStripMenuItem1.Text = "Database";
			// 
			// mySQLToolStripMenuItem1
			// 
			this.mySQLToolStripMenuItem1.Name = "mySQLToolStripMenuItem1";
			this.mySQLToolStripMenuItem1.Size = new System.Drawing.Size(112, 22);
			this.mySQLToolStripMenuItem1.Text = "MySQL";
			this.mySQLToolStripMenuItem1.Click += new System.EventHandler(this.MySQLToolStripMenuItem1Click);
			// 
			// languageToolStripMenuItem1
			// 
			this.languageToolStripMenuItem1.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.pHPTSApacheToolStripMenuItem1,
									this.pHPNTSNginxToolStripMenuItem1});
			this.languageToolStripMenuItem1.Name = "languageToolStripMenuItem1";
			this.languageToolStripMenuItem1.Size = new System.Drawing.Size(196, 22);
			this.languageToolStripMenuItem1.Text = "Language";
			// 
			// pHPTSApacheToolStripMenuItem1
			// 
			this.pHPTSApacheToolStripMenuItem1.Name = "pHPTSApacheToolStripMenuItem1";
			this.pHPTSApacheToolStripMenuItem1.Size = new System.Drawing.Size(164, 22);
			this.pHPTSApacheToolStripMenuItem1.Text = "PHP TS (Apache)";
			this.pHPTSApacheToolStripMenuItem1.Click += new System.EventHandler(this.PHPTSApacheToolStripMenuItem1Click);
			// 
			// pHPNTSNginxToolStripMenuItem1
			// 
			this.pHPNTSNginxToolStripMenuItem1.Name = "pHPNTSNginxToolStripMenuItem1";
			this.pHPNTSNginxToolStripMenuItem1.Size = new System.Drawing.Size(164, 22);
			this.pHPNTSNginxToolStripMenuItem1.Text = "PHP NTS (Nginx)";
			this.pHPNTSNginxToolStripMenuItem1.Click += new System.EventHandler(this.PHPNTSNginxToolStripMenuItem1Click);
			// 
			// webToolStripMenuItem1
			// 
			this.webToolStripMenuItem1.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.apacheToolStripMenuItem1,
									this.nginxToolStripMenuItem1});
			this.webToolStripMenuItem1.Name = "webToolStripMenuItem1";
			this.webToolStripMenuItem1.Size = new System.Drawing.Size(196, 22);
			this.webToolStripMenuItem1.Text = "Web";
			// 
			// apacheToolStripMenuItem1
			// 
			this.apacheToolStripMenuItem1.Name = "apacheToolStripMenuItem1";
			this.apacheToolStripMenuItem1.Size = new System.Drawing.Size(114, 22);
			this.apacheToolStripMenuItem1.Text = "Apache";
			this.apacheToolStripMenuItem1.Click += new System.EventHandler(this.ApacheToolStripMenuItem1Click);
			// 
			// nginxToolStripMenuItem1
			// 
			this.nginxToolStripMenuItem1.Name = "nginxToolStripMenuItem1";
			this.nginxToolStripMenuItem1.Size = new System.Drawing.Size(114, 22);
			this.nginxToolStripMenuItem1.Text = "Nginx";
			this.nginxToolStripMenuItem1.Click += new System.EventHandler(this.NginxToolStripMenuItem1Click);
			// 
			// exploreToolStripMenuItem
			// 
			this.exploreToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.openParentFolderToolStripMenuItem,
									this.databaseToolStripMenuItem2,
									this.languageToolStripMenuItem2,
									this.webToolStripMenuItem2,
									this.cacheToolStripMenuItem});
			this.exploreToolStripMenuItem.Name = "exploreToolStripMenuItem";
			this.exploreToolStripMenuItem.Size = new System.Drawing.Size(57, 20);
			this.exploreToolStripMenuItem.Text = "Explore";
			// 
			// openParentFolderToolStripMenuItem
			// 
			this.openParentFolderToolStripMenuItem.Enabled = false;
			this.openParentFolderToolStripMenuItem.Name = "openParentFolderToolStripMenuItem";
			this.openParentFolderToolStripMenuItem.Size = new System.Drawing.Size(156, 22);
			this.openParentFolderToolStripMenuItem.Text = "Folder Location";
			// 
			// databaseToolStripMenuItem2
			// 
			this.databaseToolStripMenuItem2.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.mySQLToolStripMenuItem2,
									this.mongoDBToolStripMenuItem});
			this.databaseToolStripMenuItem2.Name = "databaseToolStripMenuItem2";
			this.databaseToolStripMenuItem2.Size = new System.Drawing.Size(156, 22);
			this.databaseToolStripMenuItem2.Text = "Database";
			// 
			// mySQLToolStripMenuItem2
			// 
			this.mySQLToolStripMenuItem2.Name = "mySQLToolStripMenuItem2";
			this.mySQLToolStripMenuItem2.Size = new System.Drawing.Size(128, 22);
			this.mySQLToolStripMenuItem2.Text = "MySQL";
			this.mySQLToolStripMenuItem2.Click += new System.EventHandler(this.MySQLToolStripMenuItem2Click);
			// 
			// mongoDBToolStripMenuItem
			// 
			this.mongoDBToolStripMenuItem.Name = "mongoDBToolStripMenuItem";
			this.mongoDBToolStripMenuItem.Size = new System.Drawing.Size(128, 22);
			this.mongoDBToolStripMenuItem.Text = "MongoDB";
			this.mongoDBToolStripMenuItem.Click += new System.EventHandler(this.MongoDBToolStripMenuItemClick);
			// 
			// languageToolStripMenuItem2
			// 
			this.languageToolStripMenuItem2.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.pHPTSApacheToolStripMenuItem2,
									this.pHPNTSNginxToolStripMenuItem2});
			this.languageToolStripMenuItem2.Name = "languageToolStripMenuItem2";
			this.languageToolStripMenuItem2.Size = new System.Drawing.Size(156, 22);
			this.languageToolStripMenuItem2.Text = "Language";
			// 
			// pHPTSApacheToolStripMenuItem2
			// 
			this.pHPTSApacheToolStripMenuItem2.Name = "pHPTSApacheToolStripMenuItem2";
			this.pHPTSApacheToolStripMenuItem2.Size = new System.Drawing.Size(164, 22);
			this.pHPTSApacheToolStripMenuItem2.Text = "PHP TS (Apache)";
			this.pHPTSApacheToolStripMenuItem2.Click += new System.EventHandler(this.PHPTSApacheToolStripMenuItem2Click);
			// 
			// pHPNTSNginxToolStripMenuItem2
			// 
			this.pHPNTSNginxToolStripMenuItem2.Name = "pHPNTSNginxToolStripMenuItem2";
			this.pHPNTSNginxToolStripMenuItem2.Size = new System.Drawing.Size(164, 22);
			this.pHPNTSNginxToolStripMenuItem2.Text = "PHP NTS (Nginx)";
			this.pHPNTSNginxToolStripMenuItem2.Click += new System.EventHandler(this.PHPNTSNginxToolStripMenuItem2Click);
			// 
			// webToolStripMenuItem2
			// 
			this.webToolStripMenuItem2.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.apacheToolStripMenuItem2,
									this.nginxToolStripMenuItem2});
			this.webToolStripMenuItem2.Name = "webToolStripMenuItem2";
			this.webToolStripMenuItem2.Size = new System.Drawing.Size(156, 22);
			this.webToolStripMenuItem2.Text = "Web";
			// 
			// apacheToolStripMenuItem2
			// 
			this.apacheToolStripMenuItem2.Name = "apacheToolStripMenuItem2";
			this.apacheToolStripMenuItem2.Size = new System.Drawing.Size(114, 22);
			this.apacheToolStripMenuItem2.Text = "Apache";
			this.apacheToolStripMenuItem2.Click += new System.EventHandler(this.ApacheToolStripMenuItem2Click);
			// 
			// nginxToolStripMenuItem2
			// 
			this.nginxToolStripMenuItem2.Name = "nginxToolStripMenuItem2";
			this.nginxToolStripMenuItem2.Size = new System.Drawing.Size(114, 22);
			this.nginxToolStripMenuItem2.Text = "Nginx";
			this.nginxToolStripMenuItem2.Click += new System.EventHandler(this.NginxToolStripMenuItem2Click);
			// 
			// cacheToolStripMenuItem
			// 
			this.cacheToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.memcachedToolStripMenuItem});
			this.cacheToolStripMenuItem.Name = "cacheToolStripMenuItem";
			this.cacheToolStripMenuItem.Size = new System.Drawing.Size(156, 22);
			this.cacheToolStripMenuItem.Text = "Cache";
			// 
			// memcachedToolStripMenuItem
			// 
			this.memcachedToolStripMenuItem.Name = "memcachedToolStripMenuItem";
			this.memcachedToolStripMenuItem.Size = new System.Drawing.Size(140, 22);
			this.memcachedToolStripMenuItem.Text = "Memcached";
			this.memcachedToolStripMenuItem.Click += new System.EventHandler(this.MemcachedToolStripMenuItemClick);
			// 
			// settingsToolStripMenuItem
			// 
			this.settingsToolStripMenuItem.Name = "settingsToolStripMenuItem";
			this.settingsToolStripMenuItem.Size = new System.Drawing.Size(61, 20);
			this.settingsToolStripMenuItem.Text = "Settings";
			this.settingsToolStripMenuItem.Click += new System.EventHandler(this.SettingsToolStripMenuItemClick);
			// 
			// aboutToolStripMenuItem
			// 
			this.aboutToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
									this.versionToolStripMenuItem,
									this.copyrightToolStripMenuItem,
									this.licensedUnderToolStripMenuItem,
									this.surfStackWebsiteToolStripMenuItem});
			this.aboutToolStripMenuItem.Name = "aboutToolStripMenuItem";
			this.aboutToolStripMenuItem.Size = new System.Drawing.Size(52, 20);
			this.aboutToolStripMenuItem.Text = "About";
			// 
			// versionToolStripMenuItem
			// 
			this.versionToolStripMenuItem.Enabled = false;
			this.versionToolStripMenuItem.Name = "versionToolStripMenuItem";
			this.versionToolStripMenuItem.Size = new System.Drawing.Size(270, 22);
			this.versionToolStripMenuItem.Text = "Version:";
			// 
			// copyrightToolStripMenuItem
			// 
			this.copyrightToolStripMenuItem.Name = "copyrightToolStripMenuItem";
			this.copyrightToolStripMenuItem.Size = new System.Drawing.Size(270, 22);
			this.copyrightToolStripMenuItem.Text = "Copyright 2014 Joseph Spurrier";
			this.copyrightToolStripMenuItem.Click += new System.EventHandler(this.CopyrightToolStripMenuItemClick);
			// 
			// licensedUnderToolStripMenuItem
			// 
			this.licensedUnderToolStripMenuItem.Name = "licensedUnderToolStripMenuItem";
			this.licensedUnderToolStripMenuItem.Size = new System.Drawing.Size(270, 22);
			this.licensedUnderToolStripMenuItem.Text = "Licensed Under: Apache v2.0 License ";
			this.licensedUnderToolStripMenuItem.Click += new System.EventHandler(this.LicensedUnderToolStripMenuItemClick);
			// 
			// surfStackWebsiteToolStripMenuItem
			// 
			this.surfStackWebsiteToolStripMenuItem.Name = "surfStackWebsiteToolStripMenuItem";
			this.surfStackWebsiteToolStripMenuItem.Size = new System.Drawing.Size(270, 22);
			this.surfStackWebsiteToolStripMenuItem.Text = "SurfStack GitHub";
			this.surfStackWebsiteToolStripMenuItem.Click += new System.EventHandler(this.SurfStackWebsiteToolStripMenuItemClick);
			// 
			// btnBrowseMain
			// 
			this.btnBrowseMain.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Left)));
			this.btnBrowseMain.Location = new System.Drawing.Point(149, 139);
			this.btnBrowseMain.Name = "btnBrowseMain";
			this.btnBrowseMain.Size = new System.Drawing.Size(131, 23);
			this.btnBrowseMain.TabIndex = 5;
			this.btnBrowseMain.Text = "Browse Main Page";
			this.btnBrowseMain.UseVisualStyleBackColor = true;
			this.btnBrowseMain.Click += new System.EventHandler(this.BtnBrowseMainClick);
			// 
			// gbStatus
			// 
			this.gbStatus.Anchor = ((System.Windows.Forms.AnchorStyles)(((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
									| System.Windows.Forms.AnchorStyles.Right)));
			this.gbStatus.Controls.Add(this.cbMongoDB);
			this.gbStatus.Controls.Add(this.cMongoDB);
			this.gbStatus.Controls.Add(this.cbNginx);
			this.gbStatus.Controls.Add(this.cNginx);
			this.gbStatus.Controls.Add(this.cbApache);
			this.gbStatus.Controls.Add(this.cApache);
			this.gbStatus.Controls.Add(this.cbMemcached);
			this.gbStatus.Controls.Add(this.cbMySQL);
			this.gbStatus.Controls.Add(this.cMemcached);
			this.gbStatus.Controls.Add(this.cMySQL);
			this.gbStatus.Location = new System.Drawing.Point(12, 27);
			this.gbStatus.Name = "gbStatus";
			this.gbStatus.Size = new System.Drawing.Size(407, 105);
			this.gbStatus.TabIndex = 7;
			this.gbStatus.TabStop = false;
			this.gbStatus.Text = "Status";
			// 
			// cbMongoDB
			// 
			this.cbMongoDB.AutoSize = true;
			this.cbMongoDB.Location = new System.Drawing.Point(24, 51);
			this.cbMongoDB.Name = "cbMongoDB";
			this.cbMongoDB.Size = new System.Drawing.Size(74, 17);
			this.cbMongoDB.TabIndex = 14;
			this.cbMongoDB.Text = "MongoDB";
			this.cbMongoDB.UseVisualStyleBackColor = true;
			// 
			// cMongoDB
			// 
			this.cMongoDB.BackColor = System.Drawing.SystemColors.ActiveCaptionText;
			this.cMongoDB.Location = new System.Drawing.Point(5, 52);
			this.cMongoDB.Name = "cMongoDB";
			this.cMongoDB.Size = new System.Drawing.Size(13, 13);
			this.cMongoDB.TabIndex = 13;
			// 
			// cbNginx
			// 
			this.cbNginx.AutoSize = true;
			this.cbNginx.Location = new System.Drawing.Point(24, 35);
			this.cbNginx.Name = "cbNginx";
			this.cbNginx.Size = new System.Drawing.Size(53, 17);
			this.cbNginx.TabIndex = 12;
			this.cbNginx.Text = "Nginx";
			this.cbNginx.UseVisualStyleBackColor = true;
			// 
			// cNginx
			// 
			this.cNginx.BackColor = System.Drawing.SystemColors.ActiveCaptionText;
			this.cNginx.Location = new System.Drawing.Point(5, 36);
			this.cNginx.Name = "cNginx";
			this.cNginx.Size = new System.Drawing.Size(13, 13);
			this.cNginx.TabIndex = 11;
			// 
			// cbApache
			// 
			this.cbApache.AutoSize = true;
			this.cbApache.Location = new System.Drawing.Point(24, 19);
			this.cbApache.Name = "cbApache";
			this.cbApache.Size = new System.Drawing.Size(63, 17);
			this.cbApache.TabIndex = 10;
			this.cbApache.Text = "Apache";
			this.cbApache.UseVisualStyleBackColor = true;
			// 
			// cApache
			// 
			this.cApache.BackColor = System.Drawing.SystemColors.ActiveCaptionText;
			this.cApache.Location = new System.Drawing.Point(5, 20);
			this.cApache.Name = "cApache";
			this.cApache.Size = new System.Drawing.Size(13, 13);
			this.cApache.TabIndex = 9;
			// 
			// cbMemcached
			// 
			this.cbMemcached.AutoSize = true;
			this.cbMemcached.Location = new System.Drawing.Point(24, 83);
			this.cbMemcached.Name = "cbMemcached";
			this.cbMemcached.Size = new System.Drawing.Size(85, 17);
			this.cbMemcached.TabIndex = 8;
			this.cbMemcached.Text = "Memcached";
			this.cbMemcached.UseVisualStyleBackColor = true;
			// 
			// cbMySQL
			// 
			this.cbMySQL.AutoSize = true;
			this.cbMySQL.Location = new System.Drawing.Point(24, 67);
			this.cbMySQL.Name = "cbMySQL";
			this.cbMySQL.Size = new System.Drawing.Size(61, 17);
			this.cbMySQL.TabIndex = 7;
			this.cbMySQL.Text = "MySQL";
			this.cbMySQL.UseVisualStyleBackColor = true;
			// 
			// cMemcached
			// 
			this.cMemcached.BackColor = System.Drawing.SystemColors.ActiveCaptionText;
			this.cMemcached.Location = new System.Drawing.Point(5, 84);
			this.cMemcached.Name = "cMemcached";
			this.cMemcached.Size = new System.Drawing.Size(13, 13);
			this.cMemcached.TabIndex = 5;
			// 
			// cMySQL
			// 
			this.cMySQL.BackColor = System.Drawing.SystemColors.ActiveCaptionText;
			this.cMySQL.Location = new System.Drawing.Point(5, 68);
			this.cMySQL.Name = "cMySQL";
			this.cMySQL.Size = new System.Drawing.Size(13, 13);
			this.cMySQL.TabIndex = 3;
			// 
			// MainForm
			// 
			this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
			this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
			this.ClientSize = new System.Drawing.Size(431, 174);
			this.Controls.Add(this.gbStatus);
			this.Controls.Add(this.btnBrowseMain);
			this.Controls.Add(this.btnExit);
			this.Controls.Add(this.btnStartStop);
			this.Controls.Add(this.msTop);
			this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
			this.MainMenuStrip = this.msTop;
			this.Name = "MainForm";
			this.Text = "SurfStack WAMP";
			this.FormClosing += new System.Windows.Forms.FormClosingEventHandler(this.MainFormFormClosing);
			this.Load += new System.EventHandler(this.MainFormLoad);
			this.msTop.ResumeLayout(false);
			this.msTop.PerformLayout();
			this.gbStatus.ResumeLayout(false);
			this.gbStatus.PerformLayout();
			this.ResumeLayout(false);
			this.PerformLayout();
		}
		private System.Windows.Forms.ToolStripMenuItem memcachedToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem cacheToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem mongoDBToolStripMenuItem;
		private System.Windows.Forms.Label cApache;
		private System.Windows.Forms.CheckBox cbApache;
		private System.Windows.Forms.Label cNginx;
		private System.Windows.Forms.CheckBox cbNginx;
		private System.Windows.Forms.Label cMongoDB;
		private System.Windows.Forms.CheckBox cbMongoDB;
		private System.Windows.Forms.ToolStripMenuItem settingsToolStripMenuItem;
		private System.Windows.Forms.CheckBox cbMySQL;
		private System.Windows.Forms.CheckBox cbMemcached;
		private System.Windows.Forms.Label cMySQL;
		private System.Windows.Forms.Label cMemcached;
		private System.Windows.Forms.GroupBox gbStatus;
		private System.Windows.Forms.Button btnBrowseMain;
		private System.Windows.Forms.ToolStripMenuItem surfStackWebsiteToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem licensedUnderToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem versionToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem copyrightToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem aboutToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem nginxToolStripMenuItem2;
		private System.Windows.Forms.ToolStripMenuItem apacheToolStripMenuItem2;
		private System.Windows.Forms.ToolStripMenuItem webToolStripMenuItem2;
		private System.Windows.Forms.ToolStripMenuItem pHPNTSNginxToolStripMenuItem2;
		private System.Windows.Forms.ToolStripMenuItem pHPTSApacheToolStripMenuItem2;
		private System.Windows.Forms.ToolStripMenuItem languageToolStripMenuItem2;
		private System.Windows.Forms.ToolStripMenuItem mySQLToolStripMenuItem2;
		private System.Windows.Forms.ToolStripMenuItem databaseToolStripMenuItem2;
		private System.Windows.Forms.ToolStripMenuItem openParentFolderToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem exploreToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem nginxToolStripMenuItem1;
		private System.Windows.Forms.ToolStripMenuItem apacheToolStripMenuItem1;
		private System.Windows.Forms.ToolStripMenuItem webToolStripMenuItem1;
		private System.Windows.Forms.ToolStripMenuItem pHPNTSNginxToolStripMenuItem1;
		private System.Windows.Forms.ToolStripMenuItem pHPTSApacheToolStripMenuItem1;
		private System.Windows.Forms.ToolStripMenuItem languageToolStripMenuItem1;
		private System.Windows.Forms.ToolStripMenuItem mySQLToolStripMenuItem1;
		private System.Windows.Forms.ToolStripMenuItem databaseToolStripMenuItem1;
		private System.Windows.Forms.ToolStripMenuItem runningConfigurationsToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem viewToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem nginxToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem apacheToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem webToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem pHPNTSNginxToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem pHPTSApacheToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem languageToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem mySQLToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem databaseToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem startupConfigurationsToolStripMenuItem;
		private System.Windows.Forms.ToolStripMenuItem editToolStripMenuItem;
		private System.Windows.Forms.MenuStrip msTop;
		private System.Windows.Forms.Button btnExit;
		private System.Windows.Forms.Button btnStartStop;
	}
}
