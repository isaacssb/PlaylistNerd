<?php
require_once('credentials.php');

/**
 * Realizar requisição na api do google - Google Custom Search
 */
class googleSearchApi
{

    public function searchListItems($searchText)
    {
        $curl = curl_init();

        $url = "https://customsearch.googleapis.com/customsearch/v1?cx=" . CX_GOOGLE . "&q=" . $searchText . "&key=" . KEY_GOOGLE;

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Cookie: NID=511=JeRRXh5TLfT6C9kD-Q7FX15h2QLcNwwcDBL5fhGNvPQZYMgdsd3BeauRXt5XHuKTXksPNKD8jPkkgqp-0lQhDrOi7mnlDRgZfp7jOrzpw1V-ntxHcoCnnoJD6EbF_oNjbYbLkxweCdmCDhHSNnB7R7y8zG9V4zr6ZvMimzQWj5w'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo '<div style="width: 90%; margin: 5px auto; padding: 5px; border: 1px solid #999; border-radius: 5px; background-color: #ccffff;">';
        echo '<pre style="text-align: left;">';
        echo   '<hr>';
        echo   str_replace( $_SERVER['DOCUMENT_ROOT'], '', __FILE__) . ' (Linha ' . __LINE__ . ')';
        echo   '<hr>';
        var_dump( $response );
        echo   '<hr>';
        echo '</pre>';
        echo '</div>';
    }
}
