<?php 

global $SITEURL;

$gal = '

<style>

.monsterGallery-grid{
	display:flex;
	flex-direction:row;
	flex-wrap:wrap;'

.($gap=='' ? '':'gap:'.$gap.'px').

	'
}

@media(max-width:768px){

	.monsterGallery{
		width:95%;
		margin:0 auto;
		display:flex;
		flex-wrap:wrap;
		flex-direction:column;
	}


.monsterGallery-grid a{
	margin:0;
	padding:0;
}

.monsterGallery-grid img{
	max-width:100% !important;}}
</style>
';


$gal .= '<div class="monsterGallery-grid">';

foreach ($dataJson->images as $key => $value) {

global $SITEURL;

$forthumb = str_replace($SITEURL.'data/uploads/',GSDATAUPLOADPATH,$value);
$gal .=  '<a href="'.$value.'"  class="glightbox"    data-title="'.$dataJson->names[$key].'"
 data-description="'.$dataJson->descriptions[$key].'" data-zoomable="true"><img src="'.MGthumb($forthumb,$quality).'" style="width:'.$width.'px;height:'.$height.'px;object-fit:cover;"></a>';

}

 $gal .= '</div>';



global $modules;

$modules = 'glightbox';


 ;?>