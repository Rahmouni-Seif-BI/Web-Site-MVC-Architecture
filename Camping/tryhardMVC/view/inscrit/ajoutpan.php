<!DOCTYPE html>
<html lang="en">
<head><style>
        .table-wrapper {
		-webkit-overflow-scrolling: touch;
		overflow-x: auto;
	}

	table {
		
		width: 80%;
        
	}

		table tbody tr {
			border: solid 1px #fff;
			border-left: 0;
			border-right: 0;
		}

			table tbody tr:nth-child(2n + 1) {
				background-color: rgba(0, 144, 144, 0.25);
			}

		table td {
			padding: 0.50em 0.50em;
            text-align: center;

		}

		table th {
			color: red;
			font-size: 1em;
			font-weight: 600;
			padding: 0 0.75em 0.75em 0.75em;
			text-align: center;
		}

		table thead {
			border-bottom: solid 2px #fff;
		}

		table tfoot {
			border-top: solid 2px #fff;
		}

		table.alt {
			border-collapse: separate;
		}

			table.alt tbody tr td {
				border: solid 1px #fff;
				border-left-width: 0;
				border-top-width: 0;
			}

				table.alt tbody tr td:first-child {
					border-left-width: 1px;
				}

			table.alt tbody tr:first-child td {
				border-top-width: 1px;
			}

			table.alt thead {
				border-bottom: 0;
			}

			table.alt tfoot {
				border-top: 0;
			}


    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
 

  session_start(); 
            

  if ( isset($_POST['id']))
  {
  $_SESSION['panier'][]=array('id'=> $_POST['id']);
  echo '<script>alert("Item added")</script>';
  echo '<script>window.location="affichpan.php"</script>';
  }

  ?> 

  
</body>
</html>


