<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

    </head>
    <body>
				<x-nav-link>
				</x-nav-link>        
				
				<!-- $slot is a blade meta-contextualized php variable for laravel to slot in page specific code -->
				<?php
						/* <?php echo $slot ?> */
				?>

				<!-- The following blade meta-code is equivalent to the previous comment php code -->
				{{ $slot }}

		</body>
</html>