<Parent :content="{{ json_encode($content) }}" :categories='@json([config('services.categories.hotels_slug')])'
    :map-url="{{ json_encode(url('/map')) }}"
    localization="{{ json_encode([
        'About_the_airport_label' => __('index.airport1.About_the_airport_label'),
        'station_and_location_label' => __('index.airport1.station_and_location_label'),
        'station_and_location_about' => __('index.airport1.station_and_location_about'),
        'IAD_label' => __('index.airport1.IAD_label'),
        'IAD_about' => __('index.airport1.IAD_about'),
        'Public_and_Private_Transportation' => __('index.airport2.Public_and_Private_Transportation'),
        'VIP_lounges' => __('index.airport2.VIP_lounges'),
        'VIP_lounges_description' => __('index.airport2.VIP_lounges_description'),
        'parking' => __('index.airport2.parking'),
        'parking_sectors_description' => __('index.airport2.parking_sectors_points.description'),
        'parking_sectors_airport_public_parking' => __('index.airport2.parking_sectors_points.airport_public_parking'),
        'parking_sectors_row_2' => __('index.airport2.parking_sectors_points.row_2'),
        'parking_sectors_points' => nl2br(__('index.airport2.parking_sectors_points.parking_info')),
        'hotel_location' => __('index.hotel_location'),
        'inspired_trip' => __('index.inspired_trip'),
        'facilities' => __('index.facilities'),
        'benefits' => __('index.benefits'),
    ]) }}">
</Parent>
{{-- @dd(json_encode($content)) --}}
{{-- @dd($content) --}}
