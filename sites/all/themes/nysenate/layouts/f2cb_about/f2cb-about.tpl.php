<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width. It is 5 rows high; the top
 * middle and bottom rows contain 1 column, while the second
 * and fourth rows contain 2 columns.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['above_left']: Content in the left column in row 2.
 *   - $content['above_right']: Content in the right column in row 2.
 *   - $content['middle']: Content in the middle row.
 *   - $content['below_left']: Content in the left column in row 4.
 *   - $content['below_right']: Content in the right column in row 4.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>

  <?php if ($content['content']): ?>
  	
    <nav id="js-page-nav" class="c-about--nav">
  		<ul>
  			<li class="active " data-section="section-0">
          <a class="js-nav-item" href="">Welcome</a>
        </li>
  			<li data-section="section-1">
          <a class="js-nav-item-1" href="#section-1">How the Senate Works</a>
        </li>
  			<li data-section="section-2">
          <a class="js-nav-item-2" href="#section-2">District Map</a>
        </li>
  			<li data-section="section-4">
          <a class="js-nav-item-4" href="#section-4">Senate Seal</a>
        </li>
  			<li data-section="section-5">
          <a class="js-nav-item-5" href="#section-5">Visit the Capitol</a>
        </li>
  			<li data-section="section-6">
          <a class="js-nav-item-6" href="#section-6">Student Programs</a>
        </li>
  			<li data-section="section-7">
          <a class="js-nav-item-7" href="#section-7">Access to Information</a>
        </li>
  		</ul>
  	</nav>
    
    <a id="main-content"></a>

	<?php print $content['content']; ?>

  <?php endif; ?>
