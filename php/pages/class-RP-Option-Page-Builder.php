<?php

class RP_Option_Page_Builder {

    /**
     *
     * @param array $options
     */
    function build( $options ) {
        echo "<div class='wrap'><h2>rootsPersona <span style='font-size:smaller;'>" . $options['version'] . "</span></h2>";
        echo "<form method='post' action='options.php'>";
        echo "<p class='submit'><input type='submit' name='Submit' value=' " . __( 'Save Changes', 'rootspersona' ) . " '/></p>";
        echo "<table class='form-table'>";
        echo "<tr><td colspan='3'><span class='optionsHdr'>Privacy Options</span><hr class='optionsHdr'></span></td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[privacy_living]'>" . __( 'Living Privacy Setting', 'rootspersona' ) . "</label></td>";
        $opt = $options['privacy_living'];
        $exc = '';
        $pvt = "selected";
        $mbr = '';
        $pub = '';
        if ( isset( $opt ) ) {
            if ( $opt == 'Pub' ) {
                $pub = "selected";
                $pvt = '';
            } else if ( $opt == 'Mbr' ) {
                $mbr = "selected";
                $pvt = '';
            } else if ( $opt == 'Exc' ) {
                $exc = "selected";
                $pvt = '';
            }
        }
        echo "<td><select name='persona_plugin[privacy_living]'><option value='Exc' $exc>Exclude FROM site</option>";
        echo "<option value='Pvt' $pvt>Private, Admins Only&#160;</option>";
        echo "<option value='Mbr' $mbr>Members Only</option>";
        echo "<option value='Pub' $pub>Public</option></select></td>";
        echo "<td>" . __( 'Privacy Setting to use for living people (no death date and birth date greater than 110 years ago).', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[privacy_default]'>" . __( 'Default Privacy Setting', 'rootspersona' ) . "</label></td>";
        $opt = $options['privacy_default'];
        $pub = "selected";
        $mbr = '';
        $pvt = '';
        if ( isset( $opt ) ) {
            if ( $opt == 'Pvt' ) {
                $pvt = "selected";
                $pub = '';
            } else if ( $opt == 'Mbr' ) {
                $mbr = "selected";
                $pub = '';
            }
        }
        echo "<td><select name='persona_plugin[privacy_default]'><option value='Pvt' $pvt>Private, Admins Only&#160;</option>";
        echo "<option value='Mbr' $mbr>Members Only</option>";
        echo "<option value='Pub' $pub>Public</option></select></td>";
        echo "<td>" . __( 'Privacy Setting to use when nothing else applies.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[hide_dates]'>" . __( 'Hide Dates?', 'rootspersona' ) . "</label></td>";
        $yes = $options['hide_dates'];
        if ( isset( $yes )
        && $yes == '1' ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[hide_dates]' value='1' $yes>Yes ";
        echo "<input type='radio' name='persona_plugin[hide_dates]' value='0' $no>No </td>";
        echo "<td>" . sprintf( __( 'Some people may want to hide dates for privacy purposes.  This is a global flag (impacts all %s pages).', 'rootspersona' ), "persona" ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[hide_places]'>" . __( 'Hide Locations?', 'rootspersona' ) . "</label></td>";
        $yes = $options['hide_places'];
        if ( isset( $yes )
        && $yes == '1' ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[hide_places]' value='1' $yes>Yes ";
        echo "<input type='radio' name='persona_plugin[hide_places]' value='0' $no>No </td>";
        echo "<td>" . sprintf( __( 'Some people may want to hide locations for privacy purposes.  This is a global flag (impacts all %s pages).', 'rootspersona' ), "persona" ) . "</td></tr>";
        echo "<tr><td colspan='3'><span class='optionsHdr'>Display Options</span><hr class='optionsHdr'></span></td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[hide_header]'>" . __( 'Hide Header?', 'rootspersona' ) . "</label></td>";
        $yes = $options['hide_header'];
        if ( isset( $yes )
        && $yes == '1' ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[hide_header]' value='1' $yes>Yes ";
        echo "<input type='radio' name='persona_plugin[hide_header]' value='0' $no>No </td>";
        echo "<td>" . __( 'Skip the Header Panel on persona pages.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[hide_facts]'>" . __( 'Hide Facts?', 'rootspersona' ) . "</label></td>";
        $yes = $options['hide_facts'];
        if ( isset( $yes )
        && $yes == '1' ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[hide_facts]' value='1' $yes>Yes ";
        echo "<input type='radio' name='persona_plugin[hide_facts]' value='0' $no>No </td>";
        echo "<td>" . __( 'Skip the Facts panel on persona pages.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[hide_ancestors]'>" . __( 'Hide Ancestors?', 'rootspersona' ) . "</label></td>";
        $yes = $options['hide_ancestors'];
        if ( isset( $yes )
        && $yes == '1' ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[hide_ancestors]' value='1' $yes>Yes ";
        echo "<input type='radio' name='persona_plugin[hide_ancestors]' value='0' $no>No </td>";
        echo "<td>" . __( 'Skip the Ancestors panel on person pages.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[hide_family_c]'>" . __( 'Hide Child Family Group?', 'rootspersona' ) . "</label></td>";
        $yes = $options['hide_family_c'];
        if ( isset( $yes )
        && $yes == '1' ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[hide_family_c]' value='1' $yes>Yes ";
        echo "<input type='radio' name='persona_plugin[hide_family_c]' value='0' $no>No </td>";
        echo "<td>" . __( 'Skip the Family Group panel where the person is a Child on persona pages.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[hide_family_s]'>" . __( 'Hide Spousal Family Groups?', 'rootspersona' ) . "</label></td>";
        $yes = $options['hide_family_s'];
        if ( isset( $yes )
        && $yes == '1' ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[hide_family_s]' value='1' $yes>Yes ";
        echo "<input type='radio' name='persona_plugin[hide_family_s]' value='0' $no>No </td>";
        echo "<td>" . __( 'Skip the Family Group panels where the person is a Spouse on persona pages.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[hide_pictures]'>" . __( 'Hide Picture?', 'rootspersona' ) . "</label></td>";
        $yes = $options['hide_pictures'];
        if ( isset( $yes )
        && $yes == '1' ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[hide_pictures]' value='1' $yes>Yes ";
        echo "<input type='radio' name='persona_plugin[hide_pictures]' value='0' $no>No </td>";
        echo "<td>" . sprintf( __( 'Skip the pictures panel on %s pages. Still displays the image in the Header panel.', 'rootspersona' ), "persona" ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[hide_evidence]'>" . __( 'Hide Evidence?', 'rootspersona' ) . "</label></td>";
        $yes = $options['hide_evidence'];
        if ( isset( $yes )
        && $yes == '1' ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[hide_evidence]' value='1' $yes>Yes ";
        echo "<input type='radio' name='persona_plugin[hide_evidence]' value='0' $no>No </td>";
        echo "<td>" . __( 'Skip the evidence panel in persona pages.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[hide_edit_links]'>" . __( 'Hide Edit Links?', 'rootspersona' ) . "</label></td>";
        $yes = $options['hide_edit_links'];
        if ( isset( $yes )
        && $yes == '1' ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[hide_edit_links]' value='1' $yes>Yes ";
        echo "<input type='radio' name='persona_plugin[hide_edit_links]' value='0' $no>No </td>";
        echo "<td>" . sprintf( __( 'Some people may want to hide the edit links at the bottom of the %s page.', 'rootspersona' ), "persona" ) . "</td></tr>";
        echo "<tr><td colspan='3'><span class='optionsHdr'>Utility Pages</span><hr class='optionsHdr'></span></td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[parent_page]'>" . __( 'Parent Page Id', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='5' name='persona_plugin[parent_page]' id='parent_page'";
        echo " value='" . $options['parent_page'] . "'/></td>";
        echo "<td><a href=' " . $options['home_url'] . "?page_id=" . $options['parent_page'] . "'>" . __( 'Page', 'rootspersona' ) . "</a> " . sprintf( __( 'you want %s pages to be organized under in a menu structure.  0 indicates no parent page.', 'rootspersona' ), "persona" ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[edit_page]'>" . __( 'Edit Person Page Id', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='5' name='persona_plugin[edit_page]' id='edit_page'";
        echo " value='" . $options['edit_page'] . "'/></td>";
        echo "<td><a href=' " . $options['home_url'] . "?page_id=" . $options['edit_page'] . "'>" . __( 'Page', 'rootspersona' ) . "</a> " . __( 'with the Edit Page shortcode.  There is usually no need to change this.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[create_page]'>" . __( 'Add Person Page Id', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='5' name='persona_plugin[create_page]' id='create_page'";
        echo " value='" . $options['create_page'] . "'/></td>";
        echo "<td><a href=' " . $options['home_url'] . "?page_id=" . $options['create_page'] . "'>" . __( 'Page', 'rootspersona' ) . "</a> " . __( 'with the Add Page shortcode.  There is usually no need to change this.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[upload_gedcom_page]'>" . __( 'Upload Gedcom Page Id', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='5' name='persona_plugin[upload_gedcom_page]' id='upload_gedcom_page'";
        echo " value='" . $options['upload_gedcom_page'] . "'/></td>";
        echo "<td><a href=' " . $options['home_url'] . "?page_id=" . $options['upload_gedcom_page'] . "'>" . __( 'Page', 'rootspersona' ) . "</a> " . __( 'with the Upload GEDCOM page shortcode.  There is usually no need to change this.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[include_page]'>" . __( 'Include Person Page Id', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='5' name='persona_plugin[include_page]' id='include_page'";
        echo " value='" . $options['include_page'] . "'/></td>";
        echo "<td><a href=' " . $options['home_url'] . "?page_id=" . $options['include_page'] . "'>" . __( 'Page', 'rootspersona' ) . "</a> " . __( 'with the Include Person page shortcode.  There is usually no need to change this.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[index_page]'>" . __( 'Persona Index Page Id', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='5' name='persona_plugin[index_page]' id='index_page'";
        echo " value='" . $options['index_page'] . "'/></td>";
        echo "<td><a href=' " . $options['home_url'] . "?page_id=" . $options['index_page'] . "'>" . __( 'Page', 'rootspersona' ) . "</a> " . __( 'with the Name Index shortcode.  There is usually no need to change this.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[evidence_page]'>" . __( 'Evidence Page Id', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='5' name='persona_plugin[evidence_page]' id='evidence_page'";
        echo " value='" . $options['evidence_page'] . "'/></td>";
        echo "<td><a href=' " . $options['home_url'] . "?page_id=" . $options['evidence_page'] . "'>" . __( 'Page', 'rootspersona' ) . "</a> " . __( 'with the Evidence Index shortcode.  There is usually no need to change this.', 'rootspersona' ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[utility_page]'>" . __( 'Persona Utility Page Id', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='5' name='persona_plugin[utility_page]' id='utility_page'";
        echo " value='" . $options['utility_page'] . "'/></td>";
        echo "<td><a href=' " . $options['home_url'] . "?page_id=" . $options['utility_page'] . "'>" . __( 'Page', 'rootspersona' ) . "</a> " . __( 'with the Utility page shortcode.  For internal use only (used to display output FROM various utility functions).', 'rootspersona' ) . "</td></tr>";

        echo "<tr><td colspan='3'><span class='optionsHdr'>Misc Options</span><hr class='optionsHdr'></span></td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[banner_fcolor]'>" . __( 'Banner Foreground Color', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='5' name='persona_plugin[banner_fcolor]' id='banner_fcolor'";
        echo " value='" . ( isset( $options['banner_fcolor'] ) ?  $options['banner_fcolor'] : '' ) . "'/></td>";
        echo "<td>" . sprintf( __( 'Overrides the default foreground color for the banners between %s panels.', 'rootspersona' ), "persona" ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[banner_bcolor]'>" . __( 'Banner Background Color', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='5' name='persona_plugin[banner_bcolor]' id='banner_bcolor'";
        echo " value='" . ( isset( $options['banner_bcolor'] ) ?  $options['banner_bcolor'] : '' ) . "'/></td>";
        echo "<td>" . sprintf( __( 'Overrides the default background image for the banners between %s panels. If both color and image are provided, color will take precedence.', 'rootspersona' ), "persona" ) . "</td></tr>";
        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[banner_image]'>" . __( 'Banner Image', 'rootspersona' ) . "</label></td>";
        echo "<td><input type='text' size='20' name='persona_plugin[banner_image]' id='banner_bcolor'";
        echo " value='" . ( isset( $options['banner_image'] ) ?  $options['banner_image'] : '' ) . "'/></td>";
        echo "<td>" . sprintf( __( 'Overrides the default background image for the banners between %s panels. If both color and image are provided, color will take precedence.', 'rootspersona' ), "persona" ) . "</td></tr>";

        echo "<tr valign='top'>";
        echo "<td scope='row'><label for='persona_plugin[is_system_of_record]'>" . __( 'Is this the System Of Record?', 'rootspersona' ) . "</label></td>";
        $yes = $options['is_system_of_record'];
        if ( isset( $yes )
        && $yes == 1 ) {
            $yes = 'checked';
            $no = '';
        } else {
            $yes = '';
            $no = 'checked';
        }
        echo "<td><input type='radio' name='persona_plugin[is_system_of_record]' value='true' $yes disabled>Yes ";
        echo "<input type='radio' name='persona_plugin[is_system_of_record]' value='false' $no>No </td>";
        echo "<td>" . __( 'Only No is supported at this time (meaning some external program is the system of record).', 'rootspersona' ) . "</td></tr>";
        echo "</table><p class='submit'>";
        echo "<input type='submit' name='Submit' value=' " . __( 'Save Changes', 'rootspersona' ) . " '/>";
        echo settings_fields( 'persona_plugin' );
        echo "</p></form></div>";
    }
}
?>