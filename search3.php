<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $query = $_GET["query"]; // Get the search query from the form

    // Set your Google Custom Search Engine ID and API Key
    $cx = "d6b9e411a1ced4132"; // Replace with your Search Engine ID (CX)
    $api_key = "AIzaSyAIbcnIsC3OosYMl_x4YtLZpBABsMRq6RQ"; // Replace with your API Key

    // Create a URL to call the Google Custom Search JSON API
    $url = "https://www.googleapis.com/customsearch/v1?q=" . urlencode($query) . "&cx=" . $cx . "&key=" . $api_key;

    // Make the API request using cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Parse search results
    $results = json_decode($response, true);
    if ($results && isset($results["items"][0]["link"])) {
        // Get the URL of the first search result
        $firstResultLink = $results["items"][0]["link"];
        // Redirect to the first result using JavaScript
        echo "<script>window.location.href = '" . $firstResultLink . "';</script>";
        exit; // Exit to prevent further script execution
    } else {
        echo "No results found.";
    }
}
?>
