<?php
namespace WP_Stream;

// Load Carbon to Handle dates much easier
if ( ! class_exists( 'Carbon\Carbon' ) ) {
	require_once wp_stream_get_instance()->locations['inc_dir'] . 'lib/Carbon.php';
}

use Carbon\Carbon;

class Date_Interval {
	/**
	 * Contains an array of all available intervals
	 *
	 * @var array $intervals
	 */
	public $intervals;

	/**
	 * Class constructor
	 */
	public function __construct() {
		// Get all default intervals
		$this->intervals = $this->get_predefined_intervals();
	}

	/**
	 * @return mixed|void
	 */
	public function get_predefined_intervals() {
		$timezone = get_option( 'timezone_string' );

		if ( empty( $timezone ) ) {
			$gmt_offset = (int) get_option( 'gmt_offset' );
			$timezone   = timezone_name_from_abbr( null, $gmt_offset * 3600, true );
			if ( false === $timezone ) {
				$timezone = timezone_name_from_abbr( null, $gmt_offset * 3600, false );
			}
			if ( false === $timezone ) {
				$timezone = null;
			}
		}

		return apply_filters(
			'wp_stream_predefined_date_intervals',
			array(
				'today' => array(
					'label' => esc_html__( 'Este día', 'stream' ),
					'start' => Carbon::today( $timezone )->startOfDay(),
					'end'   => Carbon::today( $timezone )->endOfDay(),
				),
				'yesterday' => array(
					'label' => esc_html__( 'Ayer', 'stream' ),
					'start' => Carbon::today( $timezone )->startOfDay()->subDay(),
					'end'   => Carbon::today( $timezone )->startOfDay()->subSecond(),
				),
				'last-7-days' => array(
					'label' => sprintf( esc_html__( 'Hace %d Días', 'stream' ), 7 ),
					'start' => Carbon::today( $timezone )->subDays( 7 ),
					'end'   => Carbon::today( $timezone ),
				),
				'last-14-days' => array(
					'label' => sprintf( esc_html__( 'Hace %d Días', 'stream' ), 14 ),
					'start' => Carbon::today( $timezone )->subDays( 14 ),
					'end'   => Carbon::today( $timezone ),
				),
				'last-30-days' => array(
					'label' => sprintf( esc_html__( 'Hace %d Días', 'stream' ), 30 ),
					'start' => Carbon::today( $timezone )->subDays( 30 ),
					'end'   => Carbon::today( $timezone ),
				),
				'this-month' => array(
					'label' => esc_html__( 'Este Mes', 'stream' ),
					'start' => Carbon::today( $timezone )->startOfMonth(),
					'end'   => Carbon::today( $timezone )->endOfMonth(),
				),
				'last-month' => array(
					'label' => esc_html__( 'El Mes Anterior', 'stream' ),
					'start' => Carbon::today( $timezone )->startOfMonth()->subMonth(),
					'end'   => Carbon::today( $timezone )->startOfMonth()->subSecond(),
				),
				'last-3-months' => array(
					'label' => sprintf( esc_html__( 'Hace %d Meses', 'stream' ), 3 ),
					'start' => Carbon::today( $timezone )->subMonths( 3 ),
					'end'   => Carbon::today( $timezone ),
				),
				'last-6-months' => array(
					'label' => sprintf( esc_html__( 'Hace %d Meses', 'stream' ), 6 ),
					'start' => Carbon::today( $timezone )->subMonths( 6 ),
					'end'   => Carbon::today( $timezone ),
				),
				'last-12-months' => array(
					'label' => sprintf( esc_html__( 'Hace %d Meses', 'stream' ), 12 ),
					'start' => Carbon::today( $timezone )->subMonths( 12 ),
					'end'   => Carbon::today( $timezone ),
				),
				'this-year' => array(
					'label' => esc_html__( 'Este Año', 'stream' ),
					'start' => Carbon::today( $timezone )->startOfYear(),
					'end'   => Carbon::today( $timezone )->endOfYear(),
				),
				'last-year' => array(
					'label' => esc_html__( 'El Año Anterior', 'stream' ),
					'start' => Carbon::today( $timezone )->startOfYear()->subYear(),
					'end'   => Carbon::today( $timezone )->startOfYear()->subSecond(),
				),
			),
			$timezone
		);
	}
}