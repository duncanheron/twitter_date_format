function twitter_format_date($date, $suffix = 'ago') {

    $dateAgo = new DateTime($date);
    $now = new DateTime();
    $interval = $now->diff($dateAgo);
    
    $days = $interval->format('%d');
    $hours = $interval->format('%h');
    $mins = $interval->format('%i');
    
    switch ($days) {
        case 0:
            $day_string = "";
            if($hours > 1) {
                $time_ago_string = $hours . ' hours';
            } else {
                $time_ago_string = $mins . ' mins';
            }
            break;
        case 1:
            $time_ago_string = $days . " day";
            break;
        default:
            $time_ago_string = "more than a day";
    }

    $time_ago_string = $time_ago_string . ' ' . $suffix;
    
    return $time_ago_string;
}
