
<?php headerAdmin($data); 
      getModal('modalRoles', $data);
?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>
            <i class="fa fa-user-circle-o"></i>
              <?php echo $data['page_title']; ?>
               <button onclick="openModal();" class="btn btn-info" type="button" data-toggle="modal" data-target="#exampleModal"> 
                <i class="fa fa-plus" aria-hidden="true"></i>
                  Nuevo
                </button>
          </h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>/roles">
              <?php echo $data['page_title']; ?>
            </a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Roles de usuario</div>
          </div>
        </div>
      </div>
    </main>
  <?php echo footerAdmin($data); ?>