<?php
/**
 * File contains errors related to i18n translation issues.
 */

$name = 'John Doe';
esc_html__( 'Hello, ' . $name, 'plugin-check' ); // This will trigger WordPress.WP.I18n.NonSingularStringLiteralText error.