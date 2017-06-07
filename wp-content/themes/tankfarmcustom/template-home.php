<?php /* Template Name: Home Page */get_header();?>

  <script>
    var settings = {
      "async": true,
      "crossDomain": true,
      "dataType": "json",
      "url": "https://tankfarm-api-staging.herokuapp.com/api/v1/quotes?token=stage_b67caa3c48bdbe2c",
      "method": "GET",
      "headers": {
        "accept": "application/vnd.api+json",
        "Access-Control-Allow-Origin" : "*"
      }
    }

    $.ajax(settings).done(function (data) {
      console.log(data);
    });
  </script>

<?php /*
    $data = array(
      "authorizedKey" => "stage_b67caa3c48bdbe2c",
      "senderEmail" => "dylan@engage.co.za",
      "recipientEmail" => "dylan@engage.co.za",
    );

    $url_send ="https://tankfarm-api-staging.herokuapp.com/api/v1/quotes";
    $str_data = json_encode($data);

    function sendPostData($url, $post){
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);  // Seems like good practice
      return $result;
    }

    echo " " . sendPostData($url_send, $str_data);

    */ ?>

<!--
  <div class="quote-form">
    <form action="template-home_submit" method="get" accept-charset="utf-8">
      <input type="text" id="" class="" name="" placeholder="gallons">
      <input type="text" id="" class="" name="" placeholder="zip code">
      <input type="text" id="" class="" name="" placeholder="email address">
      <select name="" id="" class="">
        <option value="">Yes</option>
        <option value="">No</option>
      </select>
      <input type="submit" name="" value="Submit">
    </form>
  </div>
-->
<?php get_footer();?>
