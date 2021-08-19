<?php 

// $api_url = "https://pubertasq.com/test_api.php?action=fetch_kursus";
$api_url = "http://knip-tech.herokuapp.com/api";



$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';

if(!empty($result) && count($result) > 0)
{
    $no = 1;
    foreach($result as $row)
    {
        $output .= "

                    <div class='col-12 col-md-6 col-lg-4 my-3 res-margin'>
                        <!-- Image Box -->
                        <div class='image-box text-center icon-1 p-5 wow fadeInLeft' data-aos-duration='2s' data-wow-delay='0.4s'>
                            <!-- Featured Image -->
                            <div class='featured-img mb-3'>
                                <i class=' display-3'></i>
                            </div>
                            <!-- Icon Text -->
                            <div class='icon-text'>
                                <h3 class='mb-2 fw-7'>".$row->nama_provinsi."</h3>
                                <p>".$row->keterangan."</p>
                            </div>
                        </div>
                    </div>

            
        ";
    $no++;
    }
}
else 
{
  $output .= "
    <tr>
        <td colspan='5' align='center'>No Data Found</td>
    </tr>
  ";  
}

echo $output;

?>