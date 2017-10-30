<?php
/**
* demo import
*/
?>
<?php
function uniconext_import_files() {
  return array(

  array(
      'import_file_name'           => 'Demo 1',
      'categories'                 => array( 'Free 1' ),
      'local_import_file'            => trailingslashit( UNICON_EXTEN_PATH ) .'inc/demo/demo1/demo1.xml',
      'local_import_widget_file'     => trailingslashit( UNICON_EXTEN_PATH ) .'inc/demo/demo1/demo1-widgets.wie',
      'local_import_customizer_file' => trailingslashit( UNICON_EXTEN_PATH  ).'inc/demo/demo1/unicons-export.dat',
      'import_preview_image_url'   => esc_url(UNICON_EXTEN_URL . "/inc/demo/demo1/Demo11.png"),

    ),
  array(
      'import_file_name'           => 'Demo  2',
      'categories'                 => array( 'free 2' ),
      'local_import_file'            => trailingslashit( UNICON_EXTEN_PATH ) . 'inc/demo/demo2/demo2.xml',
      'local_import_widget_file'     => trailingslashit( UNICON_EXTEN_PATH) . 'inc/demo/demo2/demo2-widgets.wie',
      'local_import_customizer_file' => trailingslashit( UNICON_EXTEN_PATH) . 'inc/demo/demo2/unicons-export.dat',
      'import_preview_image_url'   => esc_url(UNICON_EXTEN_URL . "/inc/demo/demo2/demo22.png"),

    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'uniconext_import_files' );
