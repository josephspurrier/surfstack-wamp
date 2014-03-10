/*
 * Created by SharpDevelop.
 * User: Coil
 * Date: 8/25/2013
 * Time: 1:32 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Drawing;
using System.Windows.Forms;

namespace SSWamp
{
	/// <summary>
	/// Description of frmSettings.
	/// </summary>
	public partial class FormSettings : Form
	{
		Variables var;
		
		public FormSettings(Variables v, bool enable)
		{
			//
			// The InitializeComponent() call is required for Windows Forms designer support.
			//
			InitializeComponent();
			
			//
			// TODO: Add constructor code after the InitializeComponent() call.
			//
			
			var = v;
			handleAll(enable);
			txtServerRoot.Text = var.strApacheFolderPath;
		}
		
		void handleAll(bool blValue)
		{
			foreach (Control y in tabController.Controls)
			{
				foreach (Control x in y.Controls)
				{
					if (x is GroupBox && x.Name.StartsWith("gb"))
					{
						((GroupBox)x).Enabled = blValue;
					}
				}
			}
			
			btnSave.Enabled = blValue;
			btnRestoreDefaults.Enabled = blValue;
		}
		
		void BtnSaveClick(object sender, EventArgs e)
		{
			foreach (Control y in tabController.Controls)
			{
				foreach (Control x in y.Controls)
				{
					if (x is GroupBox && x.Name.StartsWith("gb"))
					{
						var.saveControls((GroupBox)x);
					}
				}
			}
			
			this.Close();
		}
		
		void FormSettingsLoad(object sender, EventArgs e)
		{
			if (!var.isConfigurationReady()) return;
			reload();
		}
		
		void reload()
		{
			foreach (Control y in tabController.Controls)
			{
				foreach (Control x in y.Controls)
				{
					if (x is GroupBox && x.Name.StartsWith("gb"))
					{
						var.loadControls((GroupBox)x);
					}
				}
			}
		}
		
		void BtnRestoreDefaultsClick(object sender, EventArgs e)
		{
			var.resetDefaults();
			reload();
			var.reinitialize();
		}
	}
}
