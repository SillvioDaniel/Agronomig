namespace trab_agronomig
{
    partial class frmProduto
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmProduto));
            this.btnSair = new System.Windows.Forms.Button();
            this.btnCadastrar = new System.Windows.Forms.Button();
            this.txtNome = new System.Windows.Forms.TextBox();
            this.txtValor = new System.Windows.Forms.TextBox();
            this.lblValor = new System.Windows.Forms.Label();
            this.lblTitulo = new System.Windows.Forms.Label();
            this.lblTipo = new System.Windows.Forms.Label();
            this.lblNome = new System.Windows.Forms.Label();
            this.panel2 = new System.Windows.Forms.Panel();
            this.panel4 = new System.Windows.Forms.Panel();
            this.panel3 = new System.Windows.Forms.Panel();
            this.panel1 = new System.Windows.Forms.Panel();
            this.cbmTipo = new System.Windows.Forms.ComboBox();
            this.btnTipo = new System.Windows.Forms.Button();
            this.txtCPF = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.lblFoto = new System.Windows.Forms.Label();
            this.btnFoto = new System.Windows.Forms.Button();
            this.imgFoto = new System.Windows.Forms.PictureBox();
            this.ofdFoto = new System.Windows.Forms.OpenFileDialog();
            this.label2 = new System.Windows.Forms.Label();
            this.txtEndereco = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.imgFoto)).BeginInit();
            this.SuspendLayout();
            // 
            // btnSair
            // 
            this.btnSair.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(0)))), ((int)(((byte)(0)))));
            this.btnSair.Cursor = System.Windows.Forms.Cursors.Hand;
            this.btnSair.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnSair.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnSair.ForeColor = System.Drawing.Color.White;
            this.btnSair.Location = new System.Drawing.Point(347, 361);
            this.btnSair.Name = "btnSair";
            this.btnSair.Size = new System.Drawing.Size(112, 45);
            this.btnSair.TabIndex = 4;
            this.btnSair.Text = "Sair";
            this.btnSair.UseVisualStyleBackColor = false;
            this.btnSair.Click += new System.EventHandler(this.btnSair_Click);
            // 
            // btnCadastrar
            // 
            this.btnCadastrar.BackColor = System.Drawing.Color.SeaGreen;
            this.btnCadastrar.Cursor = System.Windows.Forms.Cursors.Hand;
            this.btnCadastrar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnCadastrar.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnCadastrar.ForeColor = System.Drawing.Color.White;
            this.btnCadastrar.Location = new System.Drawing.Point(492, 361);
            this.btnCadastrar.Name = "btnCadastrar";
            this.btnCadastrar.Size = new System.Drawing.Size(112, 45);
            this.btnCadastrar.TabIndex = 3;
            this.btnCadastrar.Text = "Cadastrar";
            this.btnCadastrar.UseVisualStyleBackColor = false;
            this.btnCadastrar.Click += new System.EventHandler(this.btnCadastrar_Click);
            // 
            // txtNome
            // 
            this.txtNome.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtNome.Location = new System.Drawing.Point(112, 75);
            this.txtNome.Name = "txtNome";
            this.txtNome.Size = new System.Drawing.Size(216, 26);
            this.txtNome.TabIndex = 0;
            // 
            // txtValor
            // 
            this.txtValor.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtValor.Location = new System.Drawing.Point(112, 191);
            this.txtValor.Name = "txtValor";
            this.txtValor.Size = new System.Drawing.Size(216, 26);
            this.txtValor.TabIndex = 2;
            // 
            // lblValor
            // 
            this.lblValor.AutoSize = true;
            this.lblValor.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblValor.Location = new System.Drawing.Point(52, 196);
            this.lblValor.Name = "lblValor";
            this.lblValor.Size = new System.Drawing.Size(54, 19);
            this.lblValor.TabIndex = 67;
            this.lblValor.Text = "Valor:";
            // 
            // lblTitulo
            // 
            this.lblTitulo.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.lblTitulo.AutoSize = true;
            this.lblTitulo.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblTitulo.Location = new System.Drawing.Point(180, 30);
            this.lblTitulo.Name = "lblTitulo";
            this.lblTitulo.Size = new System.Drawing.Size(295, 25);
            this.lblTitulo.TabIndex = 66;
            this.lblTitulo.Text = "Adicionar um Novo Produto";
            // 
            // lblTipo
            // 
            this.lblTipo.AutoSize = true;
            this.lblTipo.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblTipo.Location = new System.Drawing.Point(61, 137);
            this.lblTipo.Name = "lblTipo";
            this.lblTipo.Size = new System.Drawing.Size(45, 19);
            this.lblTipo.TabIndex = 64;
            this.lblTipo.Text = "Tipo:";
            // 
            // lblNome
            // 
            this.lblNome.AutoSize = true;
            this.lblNome.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblNome.Location = new System.Drawing.Point(45, 78);
            this.lblNome.Name = "lblNome";
            this.lblNome.Size = new System.Drawing.Size(61, 19);
            this.lblNome.TabIndex = 65;
            this.lblNome.Text = "Nome:";
            // 
            // panel2
            // 
            this.panel2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(41)))), ((int)(((byte)(39)))), ((int)(((byte)(40)))));
            this.panel2.Dock = System.Windows.Forms.DockStyle.Left;
            this.panel2.Location = new System.Drawing.Point(0, 10);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(10, 423);
            this.panel2.TabIndex = 61;
            // 
            // panel4
            // 
            this.panel4.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(41)))), ((int)(((byte)(39)))), ((int)(((byte)(40)))));
            this.panel4.Dock = System.Windows.Forms.DockStyle.Right;
            this.panel4.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(71)))), ((int)(((byte)(160)))));
            this.panel4.Location = new System.Drawing.Point(626, 10);
            this.panel4.Name = "panel4";
            this.panel4.Size = new System.Drawing.Size(10, 423);
            this.panel4.TabIndex = 62;
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(41)))), ((int)(((byte)(39)))), ((int)(((byte)(40)))));
            this.panel3.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.panel3.Location = new System.Drawing.Point(0, 433);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(636, 10);
            this.panel3.TabIndex = 63;
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(41)))), ((int)(((byte)(39)))), ((int)(((byte)(40)))));
            this.panel1.Dock = System.Windows.Forms.DockStyle.Top;
            this.panel1.Location = new System.Drawing.Point(0, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(636, 10);
            this.panel1.TabIndex = 60;
            // 
            // cbmTipo
            // 
            this.cbmTipo.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.cbmTipo.Font = new System.Drawing.Font("Century Gothic", 11.25F);
            this.cbmTipo.FormattingEnabled = true;
            this.cbmTipo.Items.AddRange(new object[] {
            ""});
            this.cbmTipo.Location = new System.Drawing.Point(112, 132);
            this.cbmTipo.Name = "cbmTipo";
            this.cbmTipo.Size = new System.Drawing.Size(216, 28);
            this.cbmTipo.TabIndex = 1;
            // 
            // btnTipo
            // 
            this.btnTipo.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(179)))), ((int)(((byte)(60)))));
            this.btnTipo.Cursor = System.Windows.Forms.Cursors.Hand;
            this.btnTipo.FlatAppearance.BorderSize = 0;
            this.btnTipo.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnTipo.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnTipo.ForeColor = System.Drawing.Color.White;
            this.btnTipo.Location = new System.Drawing.Point(334, 132);
            this.btnTipo.Name = "btnTipo";
            this.btnTipo.Size = new System.Drawing.Size(33, 28);
            this.btnTipo.TabIndex = 74;
            this.btnTipo.Text = "+";
            this.btnTipo.UseVisualStyleBackColor = false;
            this.btnTipo.Click += new System.EventHandler(this.btnTipo_Click);
            // 
            // txtCPF
            // 
            this.txtCPF.Enabled = false;
            this.txtCPF.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtCPF.Location = new System.Drawing.Point(112, 248);
            this.txtCPF.Name = "txtCPF";
            this.txtCPF.Size = new System.Drawing.Size(216, 26);
            this.txtCPF.TabIndex = 75;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(61, 251);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(42, 19);
            this.label1.TabIndex = 76;
            this.label1.Text = "CPF:";
            // 
            // lblFoto
            // 
            this.lblFoto.AutoSize = true;
            this.lblFoto.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblFoto.Location = new System.Drawing.Point(350, 78);
            this.lblFoto.Name = "lblFoto";
            this.lblFoto.Size = new System.Drawing.Size(45, 19);
            this.lblFoto.TabIndex = 78;
            this.lblFoto.Text = "Foto:";
            // 
            // btnFoto
            // 
            this.btnFoto.BackColor = System.Drawing.Color.DimGray;
            this.btnFoto.Cursor = System.Windows.Forms.Cursors.Hand;
            this.btnFoto.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnFoto.ForeColor = System.Drawing.Color.White;
            this.btnFoto.Location = new System.Drawing.Point(401, 70);
            this.btnFoto.Name = "btnFoto";
            this.btnFoto.Size = new System.Drawing.Size(217, 37);
            this.btnFoto.TabIndex = 79;
            this.btnFoto.Text = "Enviar Arquivo";
            this.btnFoto.UseVisualStyleBackColor = false;
            this.btnFoto.Click += new System.EventHandler(this.btnFoto_Click);
            // 
            // imgFoto
            // 
            this.imgFoto.Image = ((System.Drawing.Image)(resources.GetObject("imgFoto.Image")));
            this.imgFoto.Location = new System.Drawing.Point(401, 118);
            this.imgFoto.Name = "imgFoto";
            this.imgFoto.Size = new System.Drawing.Size(217, 159);
            this.imgFoto.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.imgFoto.TabIndex = 81;
            this.imgFoto.TabStop = false;
            // 
            // ofdFoto
            // 
            this.ofdFoto.FileName = "openFileDialog1";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(16, 308);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(87, 19);
            this.label2.TabIndex = 83;
            this.label2.Text = "Endereço:";
            // 
            // txtEndereco
            // 
            this.txtEndereco.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtEndereco.Location = new System.Drawing.Point(109, 305);
            this.txtEndereco.Name = "txtEndereco";
            this.txtEndereco.Size = new System.Drawing.Size(509, 26);
            this.txtEndereco.TabIndex = 86;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.ForeColor = System.Drawing.Color.Red;
            this.label3.Location = new System.Drawing.Point(28, 348);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(307, 18);
            this.label3.TabIndex = 87;
            this.label3.Text = "Obs: Digite no campo \"Endereço\", o que";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.ForeColor = System.Drawing.Color.Red;
            this.label4.Location = new System.Drawing.Point(28, 375);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(313, 18);
            this.label4.TabIndex = 88;
            this.label4.Text = "encontra-se na pasta \"img\" da raiz do site";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.ForeColor = System.Drawing.Color.Red;
            this.label5.Location = new System.Drawing.Point(28, 403);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(240, 18);
            this.label5.TabIndex = 89;
            this.label5.Text = "Ex: C:\\wamp64\\www\\Site\\img";
            // 
            // frmProduto
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(636, 443);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.txtEndereco);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.imgFoto);
            this.Controls.Add(this.btnFoto);
            this.Controls.Add(this.lblFoto);
            this.Controls.Add(this.txtCPF);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnTipo);
            this.Controls.Add(this.cbmTipo);
            this.Controls.Add(this.btnSair);
            this.Controls.Add(this.btnCadastrar);
            this.Controls.Add(this.txtNome);
            this.Controls.Add(this.txtValor);
            this.Controls.Add(this.lblValor);
            this.Controls.Add(this.lblTitulo);
            this.Controls.Add(this.lblTipo);
            this.Controls.Add(this.lblNome);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.panel4);
            this.Controls.Add(this.panel3);
            this.Controls.Add(this.panel1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "frmProduto";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "frmProduto";
            this.Load += new System.EventHandler(this.frmProduto_Load);
            ((System.ComponentModel.ISupportInitialize)(this.imgFoto)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnSair;
        private System.Windows.Forms.Button btnCadastrar;
        private System.Windows.Forms.TextBox txtNome;
        private System.Windows.Forms.TextBox txtValor;
        private System.Windows.Forms.Label lblValor;
        private System.Windows.Forms.Label lblTitulo;
        private System.Windows.Forms.Label lblTipo;
        private System.Windows.Forms.Label lblNome;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Panel panel4;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.ComboBox cbmTipo;
        private System.Windows.Forms.Button btnTipo;
        private System.Windows.Forms.TextBox txtCPF;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label lblFoto;
        private System.Windows.Forms.Button btnFoto;
        private System.Windows.Forms.PictureBox imgFoto;
        private System.Windows.Forms.OpenFileDialog ofdFoto;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtEndereco;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
    }
}