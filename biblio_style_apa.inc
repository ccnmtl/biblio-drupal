<?php
// $Id: biblio_style_apa.inc,v 1.2.2.15 2008/06/09 12:39:13 rjerome Exp $
/**
 * Get the style information
 *
 * @return
 *   The name of the style
 */
function biblio_style_apa_info(){

    return array('apa'=>'American Psychological Association (APA)');
                 
}
/**
 * Apply a bibliographic style to the node
 *
 *
 * @param $node
 *   An object containing the node data to render
 * @param $base
 *   The base URL of the biblio module (defaults to /biblio)
 * @param $inline
 *   A logical value indicating if this is being rendered within the
 *   Drupal framwork (false) or we are just passing back the html (true)
 * @return
 *   The styled biblio entry
 */
function biblio_style_apa($node, $base='biblio', $inline=false){

  if (variable_get('biblio_normalize', 0)) {
    $authors = _biblio_parse_authors($node->biblio_authors);
  } else {
    $authors = $node->biblio_authors;
  } 
  $output .= '<span class="biblio-authors">' . str_replace("; ", ", ", _biblio_author_links($authors,$base,$inline)) . "</span> \n";
  $output .= (strrpos($authors, '.' ) == strlen($authors))? ".&nbsp;&nbsp;":" ";

      switch ($node->biblio_type) {
        case 1: // Journal Article
        case 2: //Conference Paper
        case 3: // are all
        case 4: 
        case 5: 
        case 6:
        case 7:
        case 8: 
        case 9:
        default:
          if (!empty($node->biblio_year)) {
            $output .= "(" . check_plain($node->biblio_year) . ").&nbsp;&nbsp;" ;
          }
          $output .=  '<span class="biblio-title-apa">' ;
        
          $link = ((variable_get('biblio_link_title_url', 0) && !empty($node->biblio_url)) ? $node->biblio_url : ($inline ? "$base/viewinline/$node->nid":"node/$node->nid" ) ) ;
          $attrib = (variable_get('biblio_links_target_new_window',null) && variable_get('biblio_link_title_url', 0) && !empty($node->biblio_url) ) ? array('target'=>'_blank') : null;

          $output .= l($node->title, $link, $attrib); 
          $output .= ". </span> \n";
          $output .= ($node->biblio_secondary_title) ? '<u>'.check_plain($node->biblio_secondary_title).'. ' : '<u>';
          $output .= ($node->biblio_volume)?  check_plain($node->biblio_volume).($node->biblio_issue?'</u>('.check_plain($node->biblio_issue).'),&nbsp;' :',</u> ') : '</u> ';
        //  $output .= ($node->biblio_issue) ? '(' . check_plain($node->biblio_issue).')' :'';
          $output .= ($node->biblio_pages) ?  check_plain($node->biblio_pages).'.' :'';
          break; // generic
      } 

/*  if ($node->biblio_date) $output .= ', ' . check_plain($node->biblio_date);
  if ($node->biblio_number) $output .= ', Number ' . check_plain($node->biblio_number);

  if ($node->biblio_place_published) $output .= ', ' . check_plain($node->biblio_place_published);
*/
  return $output;

}
