/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 1:32 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
namespace SSWamp
{
	partial class FormSettings
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
			this.btnSave = new System.Windows.Forms.Button();
			this.btnRestoreDefaults = new System.Windows.Forms.Button();
			this.tpGeneral = new System.Windows.Forms.TabPage();
			this.gbApplication = new System.Windows.Forms.GroupBox();
			this.cbUseSSL = new System.Windows.Forms.CheckBox();
			this.cbShowCMD = new System.Windows.Forms.CheckBox();
			this.gbMongoDB = new System.Windows.Forms.GroupBox();
			this.label3 = new System.Windows.Forms.Label();
			this.txtMongoDBArgs = new System.Windows.Forms.TextBox();
			this.numMongoDBPort = new System.Windows.Forms.NumericUpDown();
			this.label1 = new System.Windows.Forms.Label();
			this.gbMemcached = new System.Windows.Forms.GroupBox();
			this.numMemcachedPort = new System.Windows.Forms.NumericUpDown();
			this.label9 = new System.Windows.Forms.Label();
			this.gbPHP = new System.Windows.Forms.GroupBox();
			this.numPHPPort = new System.Windows.Forms.NumericUpDown();
			this.label6 = new System.Windows.Forms.Label();
			this.numPHPRequests = new System.Windows.Forms.NumericUpDown();
			this.label4 = new System.Windows.Forms.Label();
			this.label2 = new System.Windows.Forms.Label();
			this.numPHPThreads = new System.Windows.Forms.NumericUpDown();
			this.gbNginx = new System.Windows.Forms.GroupBox();
			this.numNginxSSLPort = new System.Windows.Forms.NumericUpDown();
			this.label5 = new System.Windows.Forms.Label();
			this.numNginxPort = new System.Windows.Forms.NumericUpDown();
			this.label8 = new System.Windows.Forms.Label();
			this.gbMySQL = new System.Windows.Forms.GroupBox();
			this.numMySQLPort = new System.Windows.Forms.NumericUpDown();
			this.label7 = new System.Windows.Forms.Label();
			this.tpApache = new System.Windows.Forms.TabPage();
			this.gbApache = new System.Windows.Forms.GroupBox();
			this.label10 = new System.Windows.Forms.Label();
			this.label12 = new System.Windows.Forms.Label();
			this.label13 = new System.Windows.Forms.Label();
			this.label14 = new System.Windows.Forms.Label();
			this.label15 = new System.Windows.Forms.Label();
			this.txtServerRoot = new System.Windows.Forms.TextBox();
			this.label16 = new System.Windows.Forms.Label();
			this.txtSourceRoot = new System.Windows.Forms.TextBox();
			this.label17 = new System.Windows.Forms.Label();
			this.numApachePortSSL = new System.Windows.Forms.NumericUpDown();
			this.txtDomainName = new System.Windows.Forms.TextBox();
			this.numApachePort = new System.Windows.Forms.NumericUpDown();
			this.txtServerName = new System.Windows.Forms.TextBox();
			this.txtServerAdmin = new System.Windows.Forms.TextBox();
			this.tabController = new System.Windows.Forms.TabControl();
			this.tpGeneral.SuspendLayout();
			this.gbApplication.SuspendLayout();
			this.gbMongoDB.SuspendLayout();
			((System.ComponentModel.ISupportInitialize)(this.numMongoDBPort)).BeginInit();
			this.gbMemcached.SuspendLayout();
			((System.ComponentModel.ISupportInitialize)(this.numMemcachedPort)).BeginInit();
			this.gbPHP.SuspendLayout();
			((System.ComponentModel.ISupportInitialize)(this.numPHPPort)).BeginInit();
			((System.ComponentModel.ISupportInitialize)(this.numPHPRequests)).BeginInit();
			((System.ComponentModel.ISupportInitialize)(this.numPHPThreads)).BeginInit();
			this.gbNginx.SuspendLayout();
			((System.ComponentModel.ISupportInitialize)(this.numNginxSSLPort)).BeginInit();
			((System.ComponentModel.ISupportInitialize)(this.numNginxPort)).BeginInit();
			this.gbMySQL.SuspendLayout();
			((System.ComponentModel.ISupportInitialize)(this.numMySQLPort)).BeginInit();
			this.tpApache.SuspendLayout();
			this.gbApache.SuspendLayout();
			((System.ComponentModel.ISupportInitialize)(this.numApachePortSSL)).BeginInit();
			((System.ComponentModel.ISupportInitialize)(this.numApachePort)).BeginInit();
			this.tabController.SuspendLayout();
			this.SuspendLayout();
			// 
			// btnSave
			// 
			this.btnSave.Location = new System.Drawing.Point(391, 5);
			this.btnSave.Name = "btnSave";
			this.btnSave.Size = new System.Drawing.Size(75, 23);
			this.btnSave.TabIndex = 1;
			this.btnSave.Text = "Save";
			this.btnSave.UseVisualStyleBackColor = true;
			this.btnSave.Click += new System.EventHandler(this.BtnSaveClick);
			// 
			// btnRestoreDefaults
			// 
			this.btnRestoreDefaults.AutoSize = true;
			this.btnRestoreDefaults.Location = new System.Drawing.Point(279, 5);
			this.btnRestoreDefaults.Name = "btnRestoreDefaults";
			this.btnRestoreDefaults.Size = new System.Drawing.Size(106, 23);
			this.btnRestoreDefaults.TabIndex = 2;
			this.btnRestoreDefaults.Text = "Restore Defaults";
			this.btnRestoreDefaults.UseVisualStyleBackColor = true;
			this.btnRestoreDefaults.Click += new System.EventHandler(this.BtnRestoreDefaultsClick);
			// 
			// tpGeneral
			// 
			this.tpGeneral.Controls.Add(this.gbApplication);
			this.tpGeneral.Controls.Add(this.gbMongoDB);
			this.tpGeneral.Controls.Add(this.gbMemcached);
			this.tpGeneral.Controls.Add(this.gbPHP);
			this.tpGeneral.Controls.Add(this.gbNginx);
			this.tpGeneral.Controls.Add(this.gbMySQL);
			this.tpGeneral.Location = new System.Drawing.Point(4, 22);
			this.tpGeneral.Name = "tpGeneral";
			this.tpGeneral.Padding = new System.Windows.Forms.Padding(3);
			this.tpGeneral.Size = new System.Drawing.Size(447, 240);
			this.tpGeneral.TabIndex = 2;
			this.tpGeneral.Text = "General";
			this.tpGeneral.UseVisualStyleBackColor = true;
			// 
			// gbApplication
			// 
			this.gbApplication.Controls.Add(this.cbUseSSL);
			this.gbApplication.Controls.Add(this.cbShowCMD);
			this.gbApplication.Location = new System.Drawing.Point(6, 157);
			this.gbApplication.Name = "gbApplication";
			this.gbApplication.Size = new System.Drawing.Size(208, 77);
			this.gbApplication.TabIndex = 14;
			this.gbApplication.TabStop = false;
			this.gbApplication.Text = "Application";
			// 
			// cbUseSSL
			// 
			this.cbUseSSL.Location = new System.Drawing.Point(6, 47);
			this.cbUseSSL.Name = "cbUseSSL";
			this.cbUseSSL.Size = new System.Drawing.Size(183, 24);
			this.cbUseSSL.TabIndex = 1;
			this.cbUseSSL.Text = "Enable SSL";
			this.cbUseSSL.UseVisualStyleBackColor = true;
			// 
			// cbShowCMD
			// 
			this.cbShowCMD.Location = new System.Drawing.Point(6, 19);
			this.cbShowCMD.Name = "cbShowCMD";
			this.cbShowCMD.Size = new System.Drawing.Size(196, 24);
			this.cbShowCMD.TabIndex = 0;
			this.cbShowCMD.Text = "Show Command Prompt Windows";
			this.cbShowCMD.UseVisualStyleBackColor = true;
			// 
			// gbMongoDB
			// 
			this.gbMongoDB.Controls.Add(this.label3);
			this.gbMongoDB.Controls.Add(this.txtMongoDBArgs);
			this.gbMongoDB.Controls.Add(this.numMongoDBPort);
			this.gbMongoDB.Controls.Add(this.label1);
			this.gbMongoDB.Location = new System.Drawing.Point(220, 57);
			this.gbMongoDB.Name = "gbMongoDB";
			this.gbMongoDB.Size = new System.Drawing.Size(221, 69);
			this.gbMongoDB.TabIndex = 13;
			this.gbMongoDB.TabStop = false;
			this.gbMongoDB.Text = "MongoDB";
			// 
			// label3
			// 
			this.label3.AutoSize = true;
			this.label3.Location = new System.Drawing.Point(6, 44);
			this.label3.Name = "label3";
			this.label3.Size = new System.Drawing.Size(31, 13);
			this.label3.TabIndex = 16;
			this.label3.Text = "Args:";
			// 
			// txtMongoDBArgs
			// 
			this.txtMongoDBArgs.Location = new System.Drawing.Point(41, 41);
			this.txtMongoDBArgs.Name = "txtMongoDBArgs";
			this.txtMongoDBArgs.Size = new System.Drawing.Size(174, 20);
			this.txtMongoDBArgs.TabIndex = 15;
			// 
			// numMongoDBPort
			// 
			this.numMongoDBPort.Location = new System.Drawing.Point(41, 14);
			this.numMongoDBPort.Maximum = new decimal(new int[] {
									65535,
									0,
									0,
									0});
			this.numMongoDBPort.Minimum = new decimal(new int[] {
									1,
									0,
									0,
									0});
			this.numMongoDBPort.Name = "numMongoDBPort";
			this.numMongoDBPort.Size = new System.Drawing.Size(174, 20);
			this.numMongoDBPort.TabIndex = 14;
			this.numMongoDBPort.Value = new decimal(new int[] {
									27017,
									0,
									0,
									0});
			// 
			// label1
			// 
			this.label1.AutoSize = true;
			this.label1.Location = new System.Drawing.Point(6, 16);
			this.label1.Name = "label1";
			this.label1.Size = new System.Drawing.Size(29, 13);
			this.label1.TabIndex = 10;
			this.label1.Text = "Port:";
			// 
			// gbMemcached
			// 
			this.gbMemcached.Controls.Add(this.numMemcachedPort);
			this.gbMemcached.Controls.Add(this.label9);
			this.gbMemcached.Location = new System.Drawing.Point(220, 6);
			this.gbMemcached.Name = "gbMemcached";
			this.gbMemcached.Size = new System.Drawing.Size(221, 44);
			this.gbMemcached.TabIndex = 12;
			this.gbMemcached.TabStop = false;
			this.gbMemcached.Text = "Memcached";
			// 
			// numMemcachedPort
			// 
			this.numMemcachedPort.Location = new System.Drawing.Point(41, 14);
			this.numMemcachedPort.Maximum = new decimal(new int[] {
									65535,
									0,
									0,
									0});
			this.numMemcachedPort.Minimum = new decimal(new int[] {
									1,
									0,
									0,
									0});
			this.numMemcachedPort.Name = "numMemcachedPort";
			this.numMemcachedPort.Size = new System.Drawing.Size(174, 20);
			this.numMemcachedPort.TabIndex = 20;
			this.numMemcachedPort.Value = new decimal(new int[] {
									11211,
									0,
									0,
									0});
			// 
			// label9
			// 
			this.label9.AutoSize = true;
			this.label9.Location = new System.Drawing.Point(6, 16);
			this.label9.Name = "label9";
			this.label9.Size = new System.Drawing.Size(29, 13);
			this.label9.TabIndex = 19;
			this.label9.Text = "Port:";
			// 
			// gbPHP
			// 
			this.gbPHP.Controls.Add(this.numPHPPort);
			this.gbPHP.Controls.Add(this.label6);
			this.gbPHP.Controls.Add(this.numPHPRequests);
			this.gbPHP.Controls.Add(this.label4);
			this.gbPHP.Controls.Add(this.label2);
			this.gbPHP.Controls.Add(this.numPHPThreads);
			this.gbPHP.Location = new System.Drawing.Point(6, 6);
			this.gbPHP.Name = "gbPHP";
			this.gbPHP.Size = new System.Drawing.Size(208, 95);
			this.gbPHP.TabIndex = 10;
			this.gbPHP.TabStop = false;
			this.gbPHP.Text = "PHP";
			// 
			// numPHPPort
			// 
			this.numPHPPort.Location = new System.Drawing.Point(87, 66);
			this.numPHPPort.Maximum = new decimal(new int[] {
									65535,
									0,
									0,
									0});
			this.numPHPPort.Minimum = new decimal(new int[] {
									1,
									0,
									0,
									0});
			this.numPHPPort.Name = "numPHPPort";
			this.numPHPPort.Size = new System.Drawing.Size(115, 20);
			this.numPHPPort.TabIndex = 13;
			this.numPHPPort.Value = new decimal(new int[] {
									1880,
									0,
									0,
									0});
			// 
			// label6
			// 
			this.label6.AutoSize = true;
			this.label6.Location = new System.Drawing.Point(13, 68);
			this.label6.Name = "label6";
			this.label6.Size = new System.Drawing.Size(68, 13);
			this.label6.TabIndex = 12;
			this.label6.Text = "Starting Port:";
			// 
			// numPHPRequests
			// 
			this.numPHPRequests.Location = new System.Drawing.Point(87, 40);
			this.numPHPRequests.Maximum = new decimal(new int[] {
									5000,
									0,
									0,
									0});
			this.numPHPRequests.Minimum = new decimal(new int[] {
									1,
									0,
									0,
									0});
			this.numPHPRequests.Name = "numPHPRequests";
			this.numPHPRequests.Size = new System.Drawing.Size(115, 20);
			this.numPHPRequests.TabIndex = 11;
			this.numPHPRequests.Value = new decimal(new int[] {
									300,
									0,
									0,
									0});
			// 
			// label4
			// 
			this.label4.AutoSize = true;
			this.label4.Location = new System.Drawing.Point(6, 42);
			this.label4.Name = "label4";
			this.label4.Size = new System.Drawing.Size(78, 13);
			this.label4.TabIndex = 10;
			this.label4.Text = "Max Requests:";
			// 
			// label2
			// 
			this.label2.AutoSize = true;
			this.label2.Location = new System.Drawing.Point(6, 16);
			this.label2.Name = "label2";
			this.label2.Size = new System.Drawing.Size(49, 13);
			this.label2.TabIndex = 9;
			this.label2.Text = "Threads:";
			// 
			// numPHPThreads
			// 
			this.numPHPThreads.Location = new System.Drawing.Point(61, 14);
			this.numPHPThreads.Maximum = new decimal(new int[] {
									25,
									0,
									0,
									0});
			this.numPHPThreads.Minimum = new decimal(new int[] {
									1,
									0,
									0,
									0});
			this.numPHPThreads.Name = "numPHPThreads";
			this.numPHPThreads.Size = new System.Drawing.Size(141, 20);
			this.numPHPThreads.TabIndex = 8;
			this.numPHPThreads.Value = new decimal(new int[] {
									2,
									0,
									0,
									0});
			// 
			// gbNginx
			// 
			this.gbNginx.Controls.Add(this.numNginxSSLPort);
			this.gbNginx.Controls.Add(this.label5);
			this.gbNginx.Controls.Add(this.numNginxPort);
			this.gbNginx.Controls.Add(this.label8);
			this.gbNginx.Location = new System.Drawing.Point(220, 132);
			this.gbNginx.Name = "gbNginx";
			this.gbNginx.Size = new System.Drawing.Size(221, 66);
			this.gbNginx.TabIndex = 9;
			this.gbNginx.TabStop = false;
			this.gbNginx.Text = "Nginx";
			// 
			// numNginxSSLPort
			// 
			this.numNginxSSLPort.Location = new System.Drawing.Point(80, 40);
			this.numNginxSSLPort.Maximum = new decimal(new int[] {
									65535,
									0,
									0,
									0});
			this.numNginxSSLPort.Minimum = new decimal(new int[] {
									1,
									0,
									0,
									0});
			this.numNginxSSLPort.Name = "numNginxSSLPort";
			this.numNginxSSLPort.Size = new System.Drawing.Size(135, 20);
			this.numNginxSSLPort.TabIndex = 18;
			this.numNginxSSLPort.Value = new decimal(new int[] {
									443,
									0,
									0,
									0});
			// 
			// label5
			// 
			this.label5.AutoSize = true;
			this.label5.Location = new System.Drawing.Point(6, 42);
			this.label5.Name = "label5";
			this.label5.Size = new System.Drawing.Size(68, 13);
			this.label5.TabIndex = 17;
			this.label5.Text = "HTTPS Port:";
			// 
			// numNginxPort
			// 
			this.numNginxPort.Location = new System.Drawing.Point(80, 14);
			this.numNginxPort.Maximum = new decimal(new int[] {
									65535,
									0,
									0,
									0});
			this.numNginxPort.Minimum = new decimal(new int[] {
									1,
									0,
									0,
									0});
			this.numNginxPort.Name = "numNginxPort";
			this.numNginxPort.Size = new System.Drawing.Size(135, 20);
			this.numNginxPort.TabIndex = 16;
			this.numNginxPort.Value = new decimal(new int[] {
									80,
									0,
									0,
									0});
			// 
			// label8
			// 
			this.label8.AutoSize = true;
			this.label8.Location = new System.Drawing.Point(6, 16);
			this.label8.Name = "label8";
			this.label8.Size = new System.Drawing.Size(61, 13);
			this.label8.TabIndex = 15;
			this.label8.Text = "HTTP Port:";
			// 
			// gbMySQL
			// 
			this.gbMySQL.Controls.Add(this.numMySQLPort);
			this.gbMySQL.Controls.Add(this.label7);
			this.gbMySQL.Location = new System.Drawing.Point(6, 107);
			this.gbMySQL.Name = "gbMySQL";
			this.gbMySQL.Size = new System.Drawing.Size(208, 44);
			this.gbMySQL.TabIndex = 11;
			this.gbMySQL.TabStop = false;
			this.gbMySQL.Text = "MySQL";
			// 
			// numMySQLPort
			// 
			this.numMySQLPort.Location = new System.Drawing.Point(41, 14);
			this.numMySQLPort.Maximum = new decimal(new int[] {
									65535,
									0,
									0,
									0});
			this.numMySQLPort.Minimum = new decimal(new int[] {
									1,
									0,
									0,
									0});
			this.numMySQLPort.Name = "numMySQLPort";
			this.numMySQLPort.Size = new System.Drawing.Size(161, 20);
			this.numMySQLPort.TabIndex = 14;
			this.numMySQLPort.Value = new decimal(new int[] {
									3306,
									0,
									0,
									0});
			// 
			// label7
			// 
			this.label7.AutoSize = true;
			this.label7.Location = new System.Drawing.Point(6, 16);
			this.label7.Name = "label7";
			this.label7.Size = new System.Drawing.Size(29, 13);
			this.label7.TabIndex = 10;
			this.label7.Text = "Port:";
			// 
			// tpApache
			// 
			this.tpApache.Controls.Add(this.gbApache);
			this.tpApache.Location = new System.Drawing.Point(4, 22);
			this.tpApache.Name = "tpApache";
			this.tpApache.Padding = new System.Windows.Forms.Padding(3);
			this.tpApache.Size = new System.Drawing.Size(447, 240);
			this.tpApache.TabIndex = 1;
			this.tpApache.Text = "Apache";
			this.tpApache.UseVisualStyleBackColor = true;
			// 
			// gbApache
			// 
			this.gbApache.Controls.Add(this.label10);
			this.gbApache.Controls.Add(this.label12);
			this.gbApache.Controls.Add(this.label13);
			this.gbApache.Controls.Add(this.label14);
			this.gbApache.Controls.Add(this.label15);
			this.gbApache.Controls.Add(this.txtServerRoot);
			this.gbApache.Controls.Add(this.label16);
			this.gbApache.Controls.Add(this.txtSourceRoot);
			this.gbApache.Controls.Add(this.label17);
			this.gbApache.Controls.Add(this.numApachePortSSL);
			this.gbApache.Controls.Add(this.txtDomainName);
			this.gbApache.Controls.Add(this.numApachePort);
			this.gbApache.Controls.Add(this.txtServerName);
			this.gbApache.Controls.Add(this.txtServerAdmin);
			this.gbApache.Location = new System.Drawing.Point(6, 6);
			this.gbApache.Name = "gbApache";
			this.gbApache.Size = new System.Drawing.Size(432, 199);
			this.gbApache.TabIndex = 26;
			this.gbApache.TabStop = false;
			this.gbApache.Text = "Apache";
			// 
			// label10
			// 
			this.label10.AutoSize = true;
			this.label10.Location = new System.Drawing.Point(15, 17);
			this.label10.Name = "label10";
			this.label10.Size = new System.Drawing.Size(77, 13);
			this.label10.TabIndex = 0;
			this.label10.Text = "Domain Name:";
			// 
			// label12
			// 
			this.label12.AutoSize = true;
			this.label12.Location = new System.Drawing.Point(20, 43);
			this.label12.Name = "label12";
			this.label12.Size = new System.Drawing.Size(72, 13);
			this.label12.TabIndex = 1;
			this.label12.Text = "Server Name:";
			// 
			// label13
			// 
			this.label13.AutoSize = true;
			this.label13.Location = new System.Drawing.Point(19, 69);
			this.label13.Name = "label13";
			this.label13.Size = new System.Drawing.Size(73, 13);
			this.label13.TabIndex = 2;
			this.label13.Text = "Server Admin:";
			// 
			// label14
			// 
			this.label14.AutoSize = true;
			this.label14.Location = new System.Drawing.Point(29, 94);
			this.label14.Name = "label14";
			this.label14.Size = new System.Drawing.Size(63, 13);
			this.label14.TabIndex = 3;
			this.label14.Text = "Server Port:";
			// 
			// label15
			// 
			this.label15.AutoSize = true;
			this.label15.Location = new System.Drawing.Point(6, 120);
			this.label15.Name = "label15";
			this.label15.Size = new System.Drawing.Size(86, 13);
			this.label15.TabIndex = 4;
			this.label15.Text = "Server SSL Port:";
			// 
			// txtServerRoot
			// 
			this.txtServerRoot.Location = new System.Drawing.Point(98, 144);
			this.txtServerRoot.Name = "txtServerRoot";
			this.txtServerRoot.ReadOnly = true;
			this.txtServerRoot.Size = new System.Drawing.Size(328, 20);
			this.txtServerRoot.TabIndex = 20;
			this.txtServerRoot.Tag = "exclude";
			// 
			// label16
			// 
			this.label16.AutoSize = true;
			this.label16.Location = new System.Drawing.Point(25, 147);
			this.label16.Name = "label16";
			this.label16.Size = new System.Drawing.Size(67, 13);
			this.label16.TabIndex = 5;
			this.label16.Text = "Server Root:";
			// 
			// txtSourceRoot
			// 
			this.txtSourceRoot.Location = new System.Drawing.Point(98, 170);
			this.txtSourceRoot.Name = "txtSourceRoot";
			this.txtSourceRoot.Size = new System.Drawing.Size(328, 20);
			this.txtSourceRoot.TabIndex = 19;
			this.txtSourceRoot.Text = "conf/original/";
			// 
			// label17
			// 
			this.label17.AutoSize = true;
			this.label17.Location = new System.Drawing.Point(22, 173);
			this.label17.Name = "label17";
			this.label17.Size = new System.Drawing.Size(70, 13);
			this.label17.TabIndex = 6;
			this.label17.Text = "Source Root:";
			// 
			// numApachePortSSL
			// 
			this.numApachePortSSL.Location = new System.Drawing.Point(98, 118);
			this.numApachePortSSL.Maximum = new decimal(new int[] {
									65535,
									0,
									0,
									0});
			this.numApachePortSSL.Minimum = new decimal(new int[] {
									1,
									0,
									0,
									0});
			this.numApachePortSSL.Name = "numApachePortSSL";
			this.numApachePortSSL.Size = new System.Drawing.Size(328, 20);
			this.numApachePortSSL.TabIndex = 18;
			this.numApachePortSSL.Value = new decimal(new int[] {
									443,
									0,
									0,
									0});
			// 
			// txtDomainName
			// 
			this.txtDomainName.Location = new System.Drawing.Point(98, 14);
			this.txtDomainName.Name = "txtDomainName";
			this.txtDomainName.Size = new System.Drawing.Size(328, 20);
			this.txtDomainName.TabIndex = 7;
			this.txtDomainName.Tag = "";
			this.txtDomainName.Text = "localhost";
			// 
			// numApachePort
			// 
			this.numApachePort.Location = new System.Drawing.Point(98, 92);
			this.numApachePort.Maximum = new decimal(new int[] {
									65535,
									0,
									0,
									0});
			this.numApachePort.Minimum = new decimal(new int[] {
									1,
									0,
									0,
									0});
			this.numApachePort.Name = "numApachePort";
			this.numApachePort.Size = new System.Drawing.Size(328, 20);
			this.numApachePort.TabIndex = 17;
			this.numApachePort.Value = new decimal(new int[] {
									80,
									0,
									0,
									0});
			// 
			// txtServerName
			// 
			this.txtServerName.Location = new System.Drawing.Point(98, 40);
			this.txtServerName.Name = "txtServerName";
			this.txtServerName.Size = new System.Drawing.Size(328, 20);
			this.txtServerName.TabIndex = 9;
			this.txtServerName.Tag = "";
			this.txtServerName.Text = "localhost";
			// 
			// txtServerAdmin
			// 
			this.txtServerAdmin.Location = new System.Drawing.Point(98, 66);
			this.txtServerAdmin.Name = "txtServerAdmin";
			this.txtServerAdmin.Size = new System.Drawing.Size(328, 20);
			this.txtServerAdmin.TabIndex = 10;
			this.txtServerAdmin.Tag = "";
			this.txtServerAdmin.Text = "root@localhost";
			// 
			// tabController
			// 
			this.tabController.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
									| System.Windows.Forms.AnchorStyles.Left) 
									| System.Windows.Forms.AnchorStyles.Right)));
			this.tabController.Controls.Add(this.tpGeneral);
			this.tabController.Controls.Add(this.tpApache);
			this.tabController.Location = new System.Drawing.Point(12, 12);
			this.tabController.Name = "tabController";
			this.tabController.SelectedIndex = 0;
			this.tabController.Size = new System.Drawing.Size(455, 266);
			this.tabController.TabIndex = 0;
			// 
			// FormSettings
			// 
			this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
			this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
			this.ClientSize = new System.Drawing.Size(479, 290);
			this.Controls.Add(this.btnRestoreDefaults);
			this.Controls.Add(this.btnSave);
			this.Controls.Add(this.tabController);
			this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
			this.MaximizeBox = false;
			this.MinimizeBox = false;
			this.Name = "FormSettings";
			this.Text = "Settings";
			this.Load += new System.EventHandler(this.FormSettingsLoad);
			this.tpGeneral.ResumeLayout(false);
			this.gbApplication.ResumeLayout(false);
			this.gbMongoDB.ResumeLayout(false);
			this.gbMongoDB.PerformLayout();
			((System.ComponentModel.ISupportInitialize)(this.numMongoDBPort)).EndInit();
			this.gbMemcached.ResumeLayout(false);
			this.gbMemcached.PerformLayout();
			((System.ComponentModel.ISupportInitialize)(this.numMemcachedPort)).EndInit();
			this.gbPHP.ResumeLayout(false);
			this.gbPHP.PerformLayout();
			((System.ComponentModel.ISupportInitialize)(this.numPHPPort)).EndInit();
			((System.ComponentModel.ISupportInitialize)(this.numPHPRequests)).EndInit();
			((System.ComponentModel.ISupportInitialize)(this.numPHPThreads)).EndInit();
			this.gbNginx.ResumeLayout(false);
			this.gbNginx.PerformLayout();
			((System.ComponentModel.ISupportInitialize)(this.numNginxSSLPort)).EndInit();
			((System.ComponentModel.ISupportInitialize)(this.numNginxPort)).EndInit();
			this.gbMySQL.ResumeLayout(false);
			this.gbMySQL.PerformLayout();
			((System.ComponentModel.ISupportInitialize)(this.numMySQLPort)).EndInit();
			this.tpApache.ResumeLayout(false);
			this.gbApache.ResumeLayout(false);
			this.gbApache.PerformLayout();
			((System.ComponentModel.ISupportInitialize)(this.numApachePortSSL)).EndInit();
			((System.ComponentModel.ISupportInitialize)(this.numApachePort)).EndInit();
			this.tabController.ResumeLayout(false);
			this.ResumeLayout(false);
			this.PerformLayout();
		}
		private System.Windows.Forms.CheckBox cbShowCMD;
		private System.Windows.Forms.CheckBox cbUseSSL;
		private System.Windows.Forms.GroupBox gbApplication;
		private System.Windows.Forms.Label label5;
		private System.Windows.Forms.NumericUpDown numNginxSSLPort;
		private System.Windows.Forms.Label label1;
		private System.Windows.Forms.NumericUpDown numMongoDBPort;
		private System.Windows.Forms.TextBox txtMongoDBArgs;
		private System.Windows.Forms.Label label3;
		private System.Windows.Forms.GroupBox gbMongoDB;
		private System.Windows.Forms.Label label7;
		private System.Windows.Forms.NumericUpDown numMySQLPort;
		private System.Windows.Forms.GroupBox gbMySQL;
		private System.Windows.Forms.Label label8;
		private System.Windows.Forms.NumericUpDown numNginxPort;
		private System.Windows.Forms.GroupBox gbNginx;
		private System.Windows.Forms.NumericUpDown numPHPThreads;
		private System.Windows.Forms.Label label2;
		private System.Windows.Forms.Label label4;
		private System.Windows.Forms.NumericUpDown numPHPRequests;
		private System.Windows.Forms.Label label6;
		private System.Windows.Forms.NumericUpDown numPHPPort;
		private System.Windows.Forms.GroupBox gbPHP;
		private System.Windows.Forms.Label label9;
		private System.Windows.Forms.NumericUpDown numMemcachedPort;
		private System.Windows.Forms.GroupBox gbMemcached;
		private System.Windows.Forms.Button btnRestoreDefaults;
		private System.Windows.Forms.Button btnSave;
		private System.Windows.Forms.TextBox txtServerAdmin;
		private System.Windows.Forms.TextBox txtServerName;
		private System.Windows.Forms.NumericUpDown numApachePort;
		private System.Windows.Forms.TextBox txtDomainName;
		private System.Windows.Forms.NumericUpDown numApachePortSSL;
		private System.Windows.Forms.Label label17;
		private System.Windows.Forms.TextBox txtSourceRoot;
		private System.Windows.Forms.Label label16;
		private System.Windows.Forms.TextBox txtServerRoot;
		private System.Windows.Forms.Label label15;
		private System.Windows.Forms.Label label14;
		private System.Windows.Forms.Label label13;
		private System.Windows.Forms.Label label12;
		private System.Windows.Forms.Label label10;
		private System.Windows.Forms.GroupBox gbApache;
		private System.Windows.Forms.TabPage tpApache;
		private System.Windows.Forms.TabPage tpGeneral;
		private System.Windows.Forms.TabControl tabController;
	}
}
