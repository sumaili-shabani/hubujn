<!-- debit de statistique -->
<div class="row">


    <div class="col-lg-12">
        <div class="row">

            <!-- fin de blocs  -->

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Nombre Total des membres</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_client); ?></div>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo(base_url()) ?>admin/users">
                                    <i class="fas fa-home fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Nombre des paiements </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_paiement); ?></div>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo(base_url()) ?>admin/paiement_normale">
                                    
                                    <i class="fas fa-dollar fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre des start-ups
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo($nombre_membre); ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo(base_url()) ?>admin/users">
                                    
                                    <i class="fas fa-university fa-2x text-gray-300"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Nombre D'utilisateurs </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_users); ?></div>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo(base_url()) ?>admin/users">
                                    
                                    <i class="fas fa-group fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

<!-- fin de statistique -->

<div class="col-md-12">
	<div class="row">
		<div class="col-md-12">
			<div class="row">

					  <?php        
                          $chart_data = '';

                          $detail3 = $this->db->query("SELECT COUNT(idcat) AS nombre, nomcat FROM profile_entreprise GROUP BY idcat");
                          
                         
                          if ($detail3->num_rows() > 0) {
                                  foreach ($detail3->result_array() as $key) {

                                    $nomcat = "entreprise :".$key["nomcat"];

                                     $chart_data .= "{ indexLabel:'".$nomcat."', y:".$key["nombre"]."}, ";
                                  }

                                  $chart_data = substr($chart_data, 0, -2);
                                  // echo($chart_data);
                          }
                          else{

                          }
                      ?>


					<?php 

						$chart_data2 = '';
						$chart_data3 = '';

						$detail2 = $this->db->query("SELECT COUNT(motif) AS nombre, motif,(SELECT SUM(montant)) as total,date_paie FROM profile_paiement GROUP BY date_paie");
						if ($detail2->num_rows() > 0) {
						    foreach ($detail2->result_array() as $key) {

							      	$libelle = $key["date_paie"];

							        $chart_data2 .= "{ indexLabel:'".$libelle."', y:".$key["total"]."}, ";

							        $chart_data3 .= "{ indexLabel:'".$libelle."', y:".$key["total"]."}, ";

							         
							}

						      
						      $chart_data2 = substr($chart_data2, 0, -2);
						      $chart_data3 = substr($chart_data3, 0, -2);

						      // echo($chart_data2);
						}
						else{

						}
					?>

				

				<div class="col-md-6">

					 <div class="card">
					    <div class="card-header text-center bg-hub  text-white">
					      Statistique de paiement par raport aux differentes dates
					    </div>
					    <div class="card-body">
					      <div id="chartContainer" style="height: 300px; width: 100%;"></div>
					    </div>
					  </div>
				</div>

				<div class="col-md-6">
				  <div class="card">
				    <div class="card-header text-center bg-hub  text-white">
				      Statistique de start-up par rapport à leur catégorie d'entreprise
				    </div>
				    <div class="card-body">
				      <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
				    </div>
				  </div>
				</div>



			</div>
		</div>
	</div>
</div>