<?php 
// Add latitude field
add_action( 'city_add_form_fields', 'add_latitude_field', 10, 2 );
function add_latitude_field($taxonomy) {
    global $feature_groups;
    ?><div class="form-field term-slug-wrap">
	<label for="latitude">Marker Latitude</label>
	<input name="latitude" id="latitude" type="text" value="" size="40">
	<p>Enter the latitude for this marker</p>
</div><?php
}
add_action( 'created_city', 'save_latitude_meta', 10, 2 );

function save_latitude_meta( $term_id, $tt_id ){
    if( isset( $_POST['latitude'] ) && '' !== $_POST['latitude'] ){
        $group = $_POST['latitude'];
        add_term_meta( $term_id, 'latitude', $group, false );
    }
}
add_action( 'city_edit_form_fields', 'edit_latitude_field', 10, 2 );

function edit_latitude_field( $term, $taxonomy ){
                
    global $feature_groups;
          
    // get current group
    $feature_group = get_term_meta( $term->term_id, 'latitude', true );
                
    ?><tr class="form-field term-group-wrap">
        <th scope="row"><label for="latitude"><?php _e( 'Marker latitude', 'icg' ); ?></label></th>
        <td><input name="latitude" id="latitude" type="text" value="<?php echo $feature_group ?>" size="40"><p>Enter the latitude for this marker</p></td>
        
    </tr><?php
}
add_action( 'edited_city', 'update_latitude_meta', 10, 2 );

function update_latitude_meta( $term_id, $tt_id ){

    if( isset( $_POST['latitude'] ) && '' !== $_POST['latitude'] ){
        $group = $_POST['latitude'];
        update_term_meta( $term_id, 'latitude', $group );
    }
}

// Add longtitude field
add_action( 'city_add_form_fields', 'add_longtitude_field', 10, 2 );
function add_longtitude_field($taxonomy) {
    global $feature_groups;
    ?><div class="form-field term-slug-wrap">
	<label for="longtitude">Marker Longtitude</label>
	<input name="longtitude" id="longtitude" type="text" value="" size="40">
	<p>Enter the longtitude for this marker</p>
</div><?php
}
add_action( 'created_city', 'save_longtitude_meta', 10, 2 );

function save_longtitude_meta( $term_id, $tt_id ){
    if( isset( $_POST['longtitude'] ) && '' !== $_POST['longtitude'] ){
        $group = $_POST['longtitude'];
        add_term_meta( $term_id, 'longtitude', $group, false );
    }
}
add_action( 'city_edit_form_fields', 'edit_longtitude_field', 10, 2 );

function edit_longtitude_field( $term, $taxonomy ){
                
    global $feature_groups;
          
    // get current group
    $feature_group = get_term_meta( $term->term_id, 'longtitude', true );
                
    ?><tr class="form-field term-group-wrap">
        <th scope="row"><label for="longtitude"><?php _e( 'Marker longtitude', 'icg' ); ?></label></th>
        <td><input name="longtitude" id="longtitude" type="text" value="<?php echo $feature_group ?>" size="40"><p>Enter the longtitude for this marker</p></td>
        
    </tr><?php
}
add_action( 'edited_city', 'update_longtitude_meta', 10, 2 );

function update_longtitude_meta( $term_id, $tt_id ){

    if( isset( $_POST['longtitude'] ) && '' !== $_POST['longtitude'] ){
        $group = $_POST['longtitude'];
        update_term_meta( $term_id, 'longtitude', $group );
    }
}
?>