<?php
function send_post_to_google_analytics($post_id) {
    // Check if this is a revision
    if (wp_is_post_revision($post_id)) {
        return;
    }

    // Get the post object
    $post = get_post($post_id);

    // Prepare the data to send
    $data = array(
        'client_id' => 'YOUR_CLIENT_ID', // Replace with your client ID
        'events' => array(
            array(
                'name' => 'post_update',
                'params' => array(
                    'post_id' => $post_id,
                    'post_title' => $post->post_title,
                    'post_type' => $post->post_type,
                    'post_status' => $post->post_status,
                    'post_author' => $post->post_author,
                ),
            ),
        ),
    );

    // Convert data to JSON
    $json_data = json_encode($data);

    // Send the data to Google Analytics
    $response = wp_remote_post('https://www.google-analytics.com/mp/collect?measurement_id=YOUR_MEASUREMENT_ID&api_secret=YOUR_API_SECRET', array(
        'method' => 'POST',
        'body' => $json_data,
        'headers' => array(
            'Content-Type' => 'application/json',
        ),
    ));

    // Check for errors
    if (is_wp_error($response)) {
        error_log('Error sending data to Google Analytics: ' . $response->get_error_message());
    }
}

// Hook into the post update action
add_action('save_post', 'send_post_to_google_analytics');
