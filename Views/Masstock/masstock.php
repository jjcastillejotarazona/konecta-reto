<?php 
    headerAdmin($data); 
?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fas fa-box"></i> <?= $data['page_title'] ?>
          </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/masstock"><?= $data['page_tag'] ?></a></li>
        </ul>
      </div>
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableMasStock">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>Producto</th>
                           <th>Stock</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
<?php footerAdmin($data); ?>