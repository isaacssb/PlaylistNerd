<?php

/**
 * Realizar requisição na api do google - Google Custom Search
 */
class googleSearchApi
{

    public function searchListItems()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://customsearch.googleapis.com/customsearch/v1?',
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
        echo $response;
    }
}
