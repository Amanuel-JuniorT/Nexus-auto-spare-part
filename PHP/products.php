<?php
  $parts = [
            ['price'=> 215, 'part'=>'BRAKE PADS', 'info'=>"Essential for safe breaking, these wear out over time and need regular replacements."], 
            ['price'=> 35, 'part'=>'AIR FILTERS', 'info'=>"Crucial for maintaining engine health by filtering out dust and debris from entering the engine"],
            ['price'=> 5, 'part'=>'SPARK PLUGS', 'info'=>"Integral for starting the combustion process in the engine often requiring perioic replacement."],
            ['price'=> 44, 'part'=>'OIL FILTERS', 'info'=>"Necessary for keeping the engine oil clean, ensuring proper lubrication for the engine's moving parts."],
            ['price'=> 240, 'part'=>'CAR BATTERIES', 'info'=>"vital for powering electrical systems in vehicles, they often require replacement after a few  ."],
            ['price'=> 215, 'part'=>'TIMING BELT/chain', 'info'=>"Critical for the engine's valve. Regular replacement is essential to prevent potential damage. "],
          ];
  $brakes = [];

/*
  foreach($parts as $val){
    foreach($val as $key=>$age){
      $present = false;
      if($key=='catagory'&& $age == 'engine'){
        $present = true;
      }
    }
    if($present){
      array_push($brakes, $val);
      
    }
  }

  // echo sizeof($parts);
/*
  
  // $pickedIndex = array_rand($parts, 1);
  // $pickedPrice = $parts[$pickedIndex]['price'];
  // $arraySplice = array_splice($parts, $pickedIndex, 1);
  // echo $pickedPrice;
  // print_r($parts);

//   function display($class, $price, $part, $description)
//       { ?>
<!-- //         <div class="products">
//           <div class="product_content <?php echo $class; ?>">
//             <div class="product_img"></div>
//             <div class="product_description">
//               <h5>$ <?php echo $price; ?></h5>
//               <h1><?php echo $part; ?></h1>
//               <p><?php echo $description; ?></p> -->

//               <!-- <h5>$ 215</h5>
//               <h1>BRAKE PADS</h1>
//               <p>Essential for safe breaking, these wear out over time and need regular replacements.</p> -->
//             </div>
//             <div class="buttons">
//               <a href="">Add To Cart</a>
//               <a href="">Detail</a>
//             </div>
//           </div>
//         </div>
//       <?php }

// $current = [];
// global $pickedIndex;
// foreach ($parts as $val) {
//   array_push($current, $val);
// }

// function picker(&$arr)
// {
//   $pickedIndex = array_rand($arr, 1);
//   echo "\n".$pickedIndex;
//   $pickedPrice = $arr[$pickedIndex]['price'];
//   $pickedPart = $arr[$pickedIndex]['part'];
//   $pickedDescription = $arr[$pickedIndex]['info'];
//   array_splice($arr, $pickedIndex, 1);
//   // display("content$i", $pickedPrice, $pickedPart, $pickedDescription);
//   print_r($arr);
// }


// for ($i = 1; $i <= 9; $i++) {
//   picker($current);
// }
*/