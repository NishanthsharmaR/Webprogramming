<?php 
$system_name    = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_address = $this->db->get_where('settings', array('type' => 'address'))->row()->description;
$footer         = $this->db->get_where('settings', array('type' => 'footer'))->row()->description;
$text_align     = $this->db->get_where('settings', array('type' => 'text_align'))->row()->description;
$loginType      = $this->session->userdata('login_type');
$running_year   = $this->db->get_where('settings', array('type' => 'session'))->row()->description;
?>
<?php include 'custom/css.php';?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

	<?php include 'custom/header.php'; ?>
	<?php include $loginType.'/navigation.php';?>
	<?php include 'custom/page_info.php';?>
	<?php include $loginType.'/'.$page_name.'.php';?>

<?php // include 'dashboard.php'; ?>



  <?php include 'custom/footer.php';?>
  <!-- Control Sidebar -->
  <?php include 'custom/right_sidebar.php';?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include 'custom/js.php';?>
</body>
</html>
