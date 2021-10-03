namespace trab_agronomig
{
    partial class uclProduto2
    {
        /// <summary> 
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary> 
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Designer de Componentes

        /// <summary> 
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(uclProduto2));
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            this.panel5 = new System.Windows.Forms.Panel();
            this.cmb_procurar = new System.Windows.Forms.ComboBox();
            this.txtPesquisa = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.button1 = new System.Windows.Forms.Button();
            this.btnAddProduto = new System.Windows.Forms.Button();
            this.panel3 = new System.Windows.Forms.Panel();
            this.panel1 = new System.Windows.Forms.Panel();
            this.panel4 = new System.Windows.Forms.Panel();
            this.panel2 = new System.Windows.Forms.Panel();
            this.dtgpesquisa = new System.Windows.Forms.DataGridView();
            this.panel6 = new System.Windows.Forms.Panel();
            this.dtgProduto = new System.Windows.Forms.DataGridView();
            this.panel5.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dtgpesquisa)).BeginInit();
            this.panel6.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dtgProduto)).BeginInit();
            this.SuspendLayout();
            // 
            // panel5
            // 
            this.panel5.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(179)))), ((int)(((byte)(60)))));
            this.panel5.Controls.Add(this.cmb_procurar);
            this.panel5.Controls.Add(this.txtPesquisa);
            this.panel5.Controls.Add(this.label1);
            this.panel5.Controls.Add(this.button1);
            this.panel5.Controls.Add(this.btnAddProduto);
            this.panel5.Dock = System.Windows.Forms.DockStyle.Top;
            this.panel5.Location = new System.Drawing.Point(10, 10);
            this.panel5.Name = "panel5";
            this.panel5.Size = new System.Drawing.Size(816, 67);
            this.panel5.TabIndex = 0;
            // 
            // cmb_procurar
            // 
            this.cmb_procurar.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.cmb_procurar.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F);
            this.cmb_procurar.FormattingEnabled = true;
            this.cmb_procurar.Items.AddRange(new object[] {
            "Código",
            "Nome",
            "Tipo",
            "Valor"});
            this.cmb_procurar.Location = new System.Drawing.Point(441, 21);
            this.cmb_procurar.Name = "cmb_procurar";
            this.cmb_procurar.Size = new System.Drawing.Size(149, 26);
            this.cmb_procurar.TabIndex = 66;
            // 
            // txtPesquisa
            // 
            this.txtPesquisa.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtPesquisa.Location = new System.Drawing.Point(596, 21);
            this.txtPesquisa.Name = "txtPesquisa";
            this.txtPesquisa.Size = new System.Drawing.Size(162, 24);
            this.txtPesquisa.TabIndex = 67;
            // 
            // label1
            // 
            this.label1.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(327, 24);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(113, 20);
            this.label1.TabIndex = 68;
            this.label1.Text = "Procurar por:";
            // 
            // button1
            // 
            this.button1.Cursor = System.Windows.Forms.Cursors.Hand;
            this.button1.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button1.Image = ((System.Drawing.Image)(resources.GetObject("button1.Image")));
            this.button1.Location = new System.Drawing.Point(764, 6);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(46, 50);
            this.button1.TabIndex = 65;
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // btnAddProduto
            // 
            this.btnAddProduto.Cursor = System.Windows.Forms.Cursors.Hand;
            this.btnAddProduto.Dock = System.Windows.Forms.DockStyle.Left;
            this.btnAddProduto.FlatAppearance.BorderSize = 0;
            this.btnAddProduto.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnAddProduto.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnAddProduto.ForeColor = System.Drawing.Color.White;
            this.btnAddProduto.Image = ((System.Drawing.Image)(resources.GetObject("btnAddProduto.Image")));
            this.btnAddProduto.Location = new System.Drawing.Point(0, 0);
            this.btnAddProduto.Name = "btnAddProduto";
            this.btnAddProduto.Size = new System.Drawing.Size(281, 67);
            this.btnAddProduto.TabIndex = 0;
            this.btnAddProduto.Text = "   Adicionar um Produto Novo";
            this.btnAddProduto.TextImageRelation = System.Windows.Forms.TextImageRelation.ImageBeforeText;
            this.btnAddProduto.UseVisualStyleBackColor = true;
            this.btnAddProduto.Click += new System.EventHandler(this.btnAddNewBooks_Click);
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(41)))), ((int)(((byte)(39)))), ((int)(((byte)(40)))));
            this.panel3.Dock = System.Windows.Forms.DockStyle.Top;
            this.panel3.Location = new System.Drawing.Point(0, 0);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(826, 10);
            this.panel3.TabIndex = 8;
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(41)))), ((int)(((byte)(39)))), ((int)(((byte)(40)))));
            this.panel1.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.panel1.Location = new System.Drawing.Point(0, 352);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(836, 11);
            this.panel1.TabIndex = 10;
            // 
            // panel4
            // 
            this.panel4.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(41)))), ((int)(((byte)(39)))), ((int)(((byte)(40)))));
            this.panel4.Dock = System.Windows.Forms.DockStyle.Right;
            this.panel4.Location = new System.Drawing.Point(826, 0);
            this.panel4.Name = "panel4";
            this.panel4.Size = new System.Drawing.Size(10, 352);
            this.panel4.TabIndex = 9;
            // 
            // panel2
            // 
            this.panel2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(41)))), ((int)(((byte)(39)))), ((int)(((byte)(40)))));
            this.panel2.Dock = System.Windows.Forms.DockStyle.Left;
            this.panel2.Location = new System.Drawing.Point(0, 10);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(10, 342);
            this.panel2.TabIndex = 7;
            // 
            // dtgpesquisa
            // 
            this.dtgpesquisa.AllowUserToAddRows = false;
            this.dtgpesquisa.AllowUserToDeleteRows = false;
            this.dtgpesquisa.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.AllCells;
            this.dtgpesquisa.AutoSizeRowsMode = System.Windows.Forms.DataGridViewAutoSizeRowsMode.AllCells;
            this.dtgpesquisa.BackgroundColor = System.Drawing.Color.FromArgb(((int)(((byte)(224)))), ((int)(((byte)(224)))), ((int)(((byte)(224)))));
            this.dtgpesquisa.CellBorderStyle = System.Windows.Forms.DataGridViewCellBorderStyle.None;
            this.dtgpesquisa.ColumnHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.None;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleCenter;
            dataGridViewCellStyle1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(64)))), ((int)(((byte)(64)))), ((int)(((byte)(64)))));
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.WhiteSmoke;
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.Color.LightSeaGreen;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.WhiteSmoke;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dtgpesquisa.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.dtgpesquisa.ColumnHeadersHeight = 30;
            this.dtgpesquisa.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.DisableResizing;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.WhiteSmoke;
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(122)))), ((int)(((byte)(204)))));
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dtgpesquisa.DefaultCellStyle = dataGridViewCellStyle2;
            this.dtgpesquisa.Dock = System.Windows.Forms.DockStyle.Fill;
            this.dtgpesquisa.EnableHeadersVisualStyles = false;
            this.dtgpesquisa.GridColor = System.Drawing.Color.FromArgb(((int)(((byte)(64)))), ((int)(((byte)(64)))), ((int)(((byte)(64)))));
            this.dtgpesquisa.Location = new System.Drawing.Point(0, 0);
            this.dtgpesquisa.Name = "dtgpesquisa";
            this.dtgpesquisa.ReadOnly = true;
            this.dtgpesquisa.RowHeadersVisible = false;
            this.dtgpesquisa.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.dtgpesquisa.Size = new System.Drawing.Size(816, 275);
            this.dtgpesquisa.TabIndex = 0;
            // 
            // panel6
            // 
            this.panel6.Controls.Add(this.dtgProduto);
            this.panel6.Controls.Add(this.dtgpesquisa);
            this.panel6.Dock = System.Windows.Forms.DockStyle.Fill;
            this.panel6.Location = new System.Drawing.Point(10, 77);
            this.panel6.Name = "panel6";
            this.panel6.Size = new System.Drawing.Size(816, 275);
            this.panel6.TabIndex = 12;
            // 
            // dtgProduto
            // 
            this.dtgProduto.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dtgProduto.Dock = System.Windows.Forms.DockStyle.Fill;
            this.dtgProduto.Location = new System.Drawing.Point(0, 0);
            this.dtgProduto.Name = "dtgProduto";
            this.dtgProduto.Size = new System.Drawing.Size(816, 275);
            this.dtgProduto.TabIndex = 1;
            this.dtgProduto.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dtg_produto_CellContentClick);
            // 
            // uclProduto2
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.Controls.Add(this.panel6);
            this.Controls.Add(this.panel5);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.panel3);
            this.Controls.Add(this.panel4);
            this.Controls.Add(this.panel1);
            this.Name = "uclProduto2";
            this.Size = new System.Drawing.Size(836, 363);
            this.Load += new System.EventHandler(this.uclProduto2_Load);
            this.panel5.ResumeLayout(false);
            this.panel5.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dtgpesquisa)).EndInit();
            this.panel6.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.dtgProduto)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.Panel panel5;
        private System.Windows.Forms.Button btnAddProduto;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Panel panel4;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.DataGridView dtgpesquisa;
        private System.Windows.Forms.Panel panel6;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.ComboBox cmb_procurar;
        private System.Windows.Forms.TextBox txtPesquisa;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.DataGridView dtgProduto;
    }
}
