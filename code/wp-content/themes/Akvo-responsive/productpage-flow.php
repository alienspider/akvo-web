<?php
/*
	Template Name: product-flow
*/
?>
<?php get_header(); ?>

<!--Start of Akvo.org Flow Product page-->

<div id="content" class="floats-in productPage withSubMenu flowProdPag">
  <div class="projectGateWay wrapper hidden">
    <p>Already a FLOW user?</p>
    <a href="#" class="">Get to the FLOW gateway &rsaquo;</a></div>
  <hgroup>
    <h1>
      <?php the_field('flow_name'); ?>
    </h1>
    <h2>
      <?php the_field('flow_tagline'); ?>
    </h2>
  </hgroup>
  <section class="productDescr wrapper" id="flowDescr">
    <h3>
      <?php the_field('flow_descr_title'); ?>
    </h3>
    <p class="fullWidthParag centerED">
      <?php the_field('flow_descr_text'); ?>
    </p>
  </section>
  <nav class="anchorNav wrapper">
    <h5>menu</h5>
    <div class="mShownCollapse"><a></a></div>
    <ul>
      <li><a href="#flowDescr">Description</a></li>
      <li class="hidden"><a href="#flowInAction">See it in action</a></li>
      <li><a href="#flowInFive">Why use FLOW?</a></li>
      <li><a href="#flowRealWorld">Who's using FLOW?</a></li>
      <li><a href="#flowTech">Technical specifications</a></li>
      <li class="hidden"><a href="#flowPricing">Pricing</a></li>
    </ul>
  </nav>
  <section class="figure"> <img src="<?php the_field('product_flow_img'); ?>" title="flowImg"/>
    <div class="figcaption"><small>
      <?php the_field('flow_figcaption'); ?>
      </small></div>
  </section>
  <section class="fullWidthParag centerED" id="flowDescr">
    <h1 class="">What is Akvo FLOW?</h1>
    <p>
      <?php the_field('what_is_flow'); ?>
    </p>
  </section>
  <section class="fullWidthParag centerED">
    <h1 class="">Why use Akvo FLOW?</h1>
    <p>
      <?php the_field('why_flow'); ?>
    </p>
  </section>

<!--  <section id="flow3Points">
    <h1 class="">Smart phones. Dashboards. Online maps</h1>
    <p>Akvo FLOW collects, manages, analyses and displays geographically referenced monitoring and evaluation data by using:</p>
    <ol class="wrapper">
      <li>
        <p>•	Internet-based management tools: design surveys and manage how they are distributed to smart phones</p>
      </li>
      <li>
        <p>•	FLOW app: staff in the field can conduct surveys using the FLOW field survey app on Android smart phones and send the data to databases hosted in the cloud; colleagues can design and send the survey questionnaires to field staff over the air</p>
      </li>
      <li>
        <p>•	Maps and dashboards: makes it easy to manage phone users, create surveys and generate online maps to view, explore and share survey data</p>
      </li>
    </ol>
  </section>
-->

<section id="flowInAction" class="wrapper hidden">
    <h1 class="">flow in action</h1>
</section>

<section class="inFivePoints" id="flowInFive">
    <ul class="wrapper">
      <li class="pointOne floats-in">
        <h3>
          <?php the_field('flow_point_one_h3'); ?>
        </h3>
        <img src="<?php the_field('flow_point_one_img'); ?>" />
        <div class="textFivePoints">
          <p>
            <?php the_field('flow_point_one_text'); ?>
          </p>
        </div>
      </li>
      <li class="pointTwo floats-in">
        <h3>
          <?php the_field('flow_point_two_h3'); ?>
        </h3>
        <img src="<?php the_field('flow_point_two_img'); ?>" />
        <div class="textFivePoints">
          <p>
            <?php the_field('flow_point_two_text'); ?>
          </p>
        </div>
      </li>
      <li class="pointThree floats-in">
        <h3>
          <?php the_field('flow_point_three_h3'); ?>
        </h3>
        <img src="<?php the_field('flow_point_three_img'); ?>" />
        <div class="textFivePoints">
          <p>
            <?php the_field('flow_point_three_text'); ?>
          </p>
        </div>
      </li>
      <li class="pointFour floats-in">
        <h3>
          <?php the_field('flow_point_four_h3'); ?>
        </h3>
        <img src="<?php the_field('flow_point_four_img'); ?>" />
        <div class="textFivePoints">
          <p>
            <?php the_field('flow_point_four_text'); ?>
          </p>
        </div>
      </li>
      <li class="pointFive floats-in">
        <h3>
          <?php the_field('flow_point_five_h3'); ?>
        </h3>
        <img src="<?php the_field('flow_point_five_img'); ?>" />
        <div class="textFivePoints">
          <p>
            <?php the_field('flow_point_five_text'); ?>
          </p>
        </div>
      </li>
    </ul>
  </section>


  <section id="flowRealWorld" class="wrapper">
    <h1 class="">Who is using Akvo FLOW?</h1>
    <p class="fullWidthParag centerED">
      <?php the_field('flow_real_world_text'); ?>
    </p>
    <img src="<?php the_field('flow_who_is_img'); ?>" /> </section>
  <section id="flowTech" class="wrapper">
    <h1 class="">Technical Specifications</h1>
    <ul>
      <li>
        <h3>
          <?php the_field('flow_tech_title_First'); ?>
        </h3>
        <p class="fullWidthParag centerED">
          <?php the_field('flow_tech_text_First'); ?>
        </p>
      </li>
      <li><br/><br/>
        <h1>
          <?php the_field('flow_tech_title_Second'); ?>
        </h1>
        <p>&nbsp;</p>
        <p class="fullWidthParag centerED">
          <?php the_field('flow_tech_text_Second'); ?>
        </p>
      </li>
    </ul>
  </section>
  <section id="flowPricing" class="wrapper hidden">
    <h1 class="">Pricing</h1>
    <p>
      <?php the_field('flow_pricing_text'); ?>
    </p>
  </section>
  <section class="wrapper centerED ">
    <a href="/help/akvo-policies-and-terms-2/akvo-flow-terms-of-use/">Akvo FLOW Terms of Use</a>  </section>
</div>
 <!-- end content -->

<?php get_footer(); ?>
