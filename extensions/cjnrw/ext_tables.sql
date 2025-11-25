#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    bgimage_class VARCHAR(255) DEFAULT '' NOT NULL,
    bgimage_position VARCHAR(255) DEFAULT '' NOT NULL,

    row_space_class VARCHAR(255) DEFAULT '' NOT NULL,
    row_item_class VARCHAR(255) DEFAULT '' NOT NULL,

	col_1_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_1_sm_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_1_md_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_1_lg_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_1_xl_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_1_xxl_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_1_custom_class VARCHAR(255) DEFAULT '' NOT NULL,

    col_2_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_2_sm_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_2_md_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_2_lg_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_2_xl_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_2_xxl_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_2_custom_class VARCHAR(255) DEFAULT '' NOT NULL,

    col_3_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_3_sm_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_3_md_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_3_lg_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_3_xl_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_3_xxl_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_3_custom_class VARCHAR(255) DEFAULT '' NOT NULL,

    col_4_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_4_sm_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_4_md_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_4_lg_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_4_xl_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_4_xxl_class VARCHAR(255) DEFAULT '' NOT NULL,
    col_4_custom_class VARCHAR(255) DEFAULT '' NOT NULL,

    parallax tinyint(4) DEFAULT '0' NOT NULL,
    parallaxoption VARCHAR(255) DEFAULT '' NOT NULL,
    animatecss VARCHAR(255) DEFAULT '' NOT NULL,

    space_start_class VARCHAR(255) DEFAULT '' NOT NULL,
    space_end_class VARCHAR(255) DEFAULT '' NOT NULL,

    counter_start VARCHAR(255) DEFAULT '' NOT NULL,
    counter_end VARCHAR(255) DEFAULT '' NOT NULL,
    counter_duration VARCHAR(255) DEFAULT '' NOT NULL,
    counter_delay VARCHAR(255) DEFAULT '' NOT NULL,
    counter_once tinyint(4) DEFAULT '0' NOT NULL,
    counter_decimals VARCHAR(255) DEFAULT '' NOT NULL,
    counter_decimalseparatorsymbol VARCHAR(255) DEFAULT '' NOT NULL,
    counter_currency VARCHAR(255) DEFAULT '' NOT NULL,
    counter_currencysymbol VARCHAR(255) DEFAULT '' NOT NULL,
    counter_currencyposition VARCHAR(255) DEFAULT '' NOT NULL,
    counter_separator tinyint(4) DEFAULT '0' NOT NULL,
    counter_separatorsymbol VARCHAR(255) DEFAULT '' NOT NULL,

    carousel_controls tinyint(4) DEFAULT '0' NOT NULL,
    carousel_indicators tinyint(4) DEFAULT '0' NOT NULL,
    carousel_captions tinyint(4) DEFAULT '0' NOT NULL,
    carousel_crossfade tinyint(4) DEFAULT '0' NOT NULL,
    carousel_intervall VARCHAR(255) DEFAULT '' NOT NULL,
    special_carousel tinyint(4) DEFAULT '0' NOT NULL,
    tinyslider_config text DEFAULT '' NOT NULL,

    overflow_hidden tinyint(4) DEFAULT '0' NOT NULL,
    drop_shadow tinyint(4) DEFAULT '0' NOT NULL,

    header_color VARCHAR(80) DEFAULT '' NOT NULL,
    header_distance_bottom VARCHAR(80) DEFAULT '' NOT NULL,

    imagecols_xxl int(3) DEFAULT '0' NOT NULL,
    imagecols_xl int(3) DEFAULT '0' NOT NULL,
    imagecols_lg int(3) DEFAULT '0' NOT NULL,
    imagecols_md int(3) DEFAULT '0' NOT NULL,
    imagecols_sm int(3) DEFAULT '0' NOT NULL,

    menu_layout VARCHAR(255) DEFAULT '' NOT NULL,
    with_splash tinyint(4) DEFAULT '1' NOT NULL,
);

#
# Table structure for table 'pages'
#
CREATE TABLE pages (
    theme VARCHAR(255) DEFAULT '' NOT NULL,
    social_media_icon VARCHAR(255) DEFAULT '' NOT NULL,
    disable_pagesplash tinyint(4) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'sys_file_reference'
#
CREATE TABLE sys_file_reference (
    image_style varchar(20) DEFAULT '' NOT NULL
);

#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
    hide_more tinyint(4) DEFAULT '0' NOT NULL
);
