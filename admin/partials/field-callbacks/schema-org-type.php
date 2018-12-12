<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CH_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'ch-directs-plugin' ),
	'Airline'     => __( 'Airline', 'ch-directs-plugin' ),
	'Corporation' => __( 'Corporation', 'ch-directs-plugin' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'ch-directs-plugin' ),
		'CollegeOrUniversity' => __( '— College or University', 'ch-directs-plugin' ),
		'ElementarySchool'    => __( '— Elementary School', 'ch-directs-plugin' ),
		'HighSchool'          => __( '— High School', 'ch-directs-plugin' ),
		'MiddleSchool'        => __( '— Middle School', 'ch-directs-plugin' ),
		'Preschool'           => __( '— Preschool', 'ch-directs-plugin' ),
		'School'              => __( '— School', 'ch-directs-plugin' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'ch-directs-plugin' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'ch-directs-plugin' ),
		'AnimalShelter' => __( '— Animal Shelter', 'ch-directs-plugin' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'ch-directs-plugin' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'ch-directs-plugin' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'ch-directs-plugin' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'ch-directs-plugin' ),
			'AutoRental'       => __( '—— Auto Rental', 'ch-directs-plugin' ),
			'AutoRepair'       => __( '—— Auto Repair', 'ch-directs-plugin' ),
			'AutoWash'         => __( '—— Auto Wash', 'ch-directs-plugin' ),
			'GasStation'       => __( '—— Gas Station', 'ch-directs-plugin' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'ch-directs-plugin' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'ch-directs-plugin' ),

		'ChildCare'            => __( '— Child Care', 'ch-directs-plugin' ),
		'Dentist'              => __( '— Dentist', 'ch-directs-plugin' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'ch-directs-plugin' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'ch-directs-plugin' ),
			'FireStation'   => __( '—— Fire Station', 'ch-directs-plugin' ),
			'Hospital'      => __( '—— Hospital', 'ch-directs-plugin' ),
			'PoliceStation' => __( '—— Police Station', 'ch-directs-plugin' ),

		'EmploymentAgency' => __( '— Employment Agency', 'ch-directs-plugin' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'ch-directs-plugin' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'ch-directs-plugin' ),
			'AmusementPark'      => __( '—— Amusement Park', 'ch-directs-plugin' ),
			'ArtGallery'         => __( '—— Art Gallery', 'ch-directs-plugin' ),
			'Casino'             => __( '—— Casino', 'ch-directs-plugin' ),
			'ComedyClub'         => __( '—— Comedy Club', 'ch-directs-plugin' ),
			'MovieTheater'       => __( '—— Movie Theater', 'ch-directs-plugin' ),
			'NightClub'          => __( '—— Night Club', 'ch-directs-plugin' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'ch-directs-plugin' ),
			'AccountingService' => __( '—— Accounting Service', 'ch-directs-plugin' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'ch-directs-plugin' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'ch-directs-plugin' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'ch-directs-plugin' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'ch-directs-plugin' ),
			'Bakery'             => __( '—— Bakery', 'ch-directs-plugin' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'ch-directs-plugin' ),
			'Brewery'            => __( '—— Brewery', 'ch-directs-plugin' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'ch-directs-plugin' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'ch-directs-plugin' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'ch-directs-plugin' ),
			'Restaurant'         => __( '—— Restaurant', 'ch-directs-plugin' ),
			'Winery'             => __( '—— Winery', 'ch-directs-plugin' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'ch-directs-plugin' ),
			'PostOffice' => __( '—— Post Office', 'ch-directs-plugin' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'ch-directs-plugin' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'ch-directs-plugin' ),
			'DaySpa'       => __( '—— Day Spa', 'ch-directs-plugin' ),
			'HairSalon'    => __( '—— Hair Salon', 'ch-directs-plugin' ),
			'HealthClub'   => __( '—— Health Club', 'ch-directs-plugin' ),
			'NailSalon'    => __( '—— Nail Salon', 'ch-directs-plugin' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'ch-directs-plugin' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'ch-directs-plugin' ),
			'Electrician'       => __( '—— Electrician', 'ch-directs-plugin' ),
			'GeneralContractor' => __( '—— General Contractor', 'ch-directs-plugin' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'ch-directs-plugin' ),
			'HousePainter'      => __( '—— House Painter', 'ch-directs-plugin' ),
			'Locksmith'         => __( '—— Locksmith', 'ch-directs-plugin' ),
			'MovingCompany'     => __( '—— MovingCompany', 'ch-directs-plugin' ),
			'Plumber'           => __( '—— Plumber', 'ch-directs-plugin' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'ch-directs-plugin' ),

		'InternetCafe' => __( '— Internet Cafe', 'ch-directs-plugin' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'ch-directs-plugin' ),
			'Attorney' => __( '—— Attorney', 'ch-directs-plugin' ),
			'Notary'   => __( '—— Notary', 'ch-directs-plugin' ),

		'Library' => __( '— Library', 'ch-directs-plugin' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'ch-directs-plugin' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'ch-directs-plugin' ),
			'Campground'      => __( '—— Campground', 'ch-directs-plugin' ),
			'Hostel'          => __( '—— Hostel', 'ch-directs-plugin' ),
			'Hotel'           => __( '—— Hotel', 'ch-directs-plugin' ),
			'Motel'           => __( '—— Motel', 'ch-directs-plugin' ),
			'Resort'          => __( '—— Resort', 'ch-directs-plugin' ),

		'ProfessionalService' => __( '— Professional Service', 'ch-directs-plugin' ),
		'RadioStation'        => __( '— Radio Station', 'ch-directs-plugin' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'ch-directs-plugin' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'ch-directs-plugin' ),
		'SelfStorage'         => __( '— Self Storage', 'ch-directs-plugin' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'ch-directs-plugin' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'ch-directs-plugin' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'ch-directs-plugin' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'ch-directs-plugin' ),
			'GolfCourse'         => __( '—— Golf Course', 'ch-directs-plugin' ),
			'HealthClub'         => __( '—— Health Club', 'ch-directs-plugin' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'ch-directs-plugin' ),
			'SkiResort'          => __( '—— Ski Resort', 'ch-directs-plugin' ),
			'SportsClub'         => __( '—— Sports Club', 'ch-directs-plugin' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'ch-directs-plugin' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'ch-directs-plugin' ),

		// Store types.
		'Store' => __( '— Store', 'ch-directs-plugin' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'ch-directs-plugin' ),
			'BikeStore'           => __( '—— Bike Store', 'ch-directs-plugin' ),
			'BookStore'           => __( '—— Book Store', 'ch-directs-plugin' ),
			'ClothingStore'       => __( '—— Clothing Store', 'ch-directs-plugin' ),
			'ComputerStore'       => __( '—— Computer Store', 'ch-directs-plugin' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'ch-directs-plugin' ),
			'DepartmentStore'     => __( '—— Department Store', 'ch-directs-plugin' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'ch-directs-plugin' ),
			'Florist'             => __( '—— Florist', 'ch-directs-plugin' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'ch-directs-plugin' ),
			'GardenStore'         => __( '—— Garden Store', 'ch-directs-plugin' ),
			'GroceryStore'        => __( '—— Grocery Store', 'ch-directs-plugin' ),
			'HardwareStore'       => __( '—— Hardware Store', 'ch-directs-plugin' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'ch-directs-plugin' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'ch-directs-plugin' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'ch-directs-plugin' ),
			'LiquorStore'         => __( '—— Liquor Store', 'ch-directs-plugin' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'ch-directs-plugin' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'ch-directs-plugin' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'ch-directs-plugin' ),
			'MusicStore'          => __( '—— Music Store', 'ch-directs-plugin' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'ch-directs-plugin' ),
			'OutletStore'         => __( '—— Outlet Store', 'ch-directs-plugin' ),
			'PawnShop'            => __( '—— Pawn Shop', 'ch-directs-plugin' ),
			'PetStore'            => __( '—— Pet Store', 'ch-directs-plugin' ),
			'ShoeStore'           => __( '—— Shoe Store', 'ch-directs-plugin' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'ch-directs-plugin' ),
			'TireShop'            => __( '—— Tire Shop', 'ch-directs-plugin' ),
			'ToyStore'            => __( '—— Toy Store', 'ch-directs-plugin' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'ch-directs-plugin' ),

		'TelevisionStation'        => __( '— Television Station', 'ch-directs-plugin' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'ch-directs-plugin' ),
		'TravelAgency'             => __( '— Travel Agency', 'ch-directs-plugin' ),

	'MedicalOrganization' => __( 'Medical Organization', 'ch-directs-plugin' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'ch-directs-plugin' ),
	'PerformingGroup'     => __( 'Performing Group', 'ch-directs-plugin' ),
	'SportsOrganization'  => __( 'Sports Organization', 'ch-directs-plugin' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'ch-directs-plugin' ) )
);
$html .= '</p>';

echo $html;