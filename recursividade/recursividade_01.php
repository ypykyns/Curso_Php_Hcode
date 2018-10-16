<?php 

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados' => array(
			// inicio: Diretor Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//inicio gerente de vendas
					array(
					'nome_cargo'=>'Gerente de Vendas' 
				   )
					// termino gerente de vendas
				)				
			),
			// término: diretor comercial

			// inicio diretor finaceiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					// inicio: gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente contas a pagar',
						'subordinados'=>array(
							// inicio supervisor de pagtos

							array(
								'nome_cargo'=>'Supervisor de pagamentos'
							)
							// termino supervisor de pagtos
						)	
					),
					//termino gerente de contas a pagar
					// inicio gerente de compras
					array(
						'nome_cargo'=>'Gerente de compras',
						'subordinados'=>array(
							// inicio supervisor de suprimentos
								array (
									'nome_cargo'=>'supervisor de suprimentos'	
								)
								// termino supervisor de suprimentos 
						)
					)
					// termino gerente de compras
				)
			)
			// término diretor financeiro
		)
	 )
 );

// var_dump($hierarquia);

function exibe($cargos){

$html = '<ul>';

foreach ($cargos as $cargo ) {
	
	$html .= "<li>";

	$html .= $cargo['nome_cargo'];

	if (isset ($cargo['subordinados']) && count($cargo['subordinados']) > 0){

		$html .= exibe($cargo['subordinados']);

	}

	$html.= "</li>";
}

$html .="</ul>";

return $html;

}

echo exibe($hierarquia);

 ?>