<?php

function api($params = '') {
    
    // Jika ada parameter, tambahkan ke URL
    if (!empty($params)) {
        $apiUrl .= $params;
    }

    // Inisialisasi cURL
    $ch = curl_init($apiUrl);

    // Konfigurasi opsi cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set agar hasil permintaan disimpan dalam variabel

    // Eksekusi cURL dan ambil respons
    $response = curl_exec($ch);

    // Periksa apakah ada kesalahan
    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    } else {
        // Respons dari API (misalnya JSON)
        $decodedResponse = json_decode($response, true);

        // Tutup koneksi cURL
        curl_close($ch);

        // Kembalikan respons yang sudah didekode
        return $decodedResponse;
    }

    // Tutup koneksi cURL
    curl_close($ch);
}

function fetchDataFromApi($params = '') {
    // URL API yang akan diakses
    $apiUrl = 'https://lk21-api-custom.cyclic.app';

    // Jika ada parameter, tambahkan ke URL
    if (!empty($params)) {
        $apiUrl .= '/' . $params;
    }

    // Inisialisasi cURL
    $ch = curl_init($apiUrl);

    // Konfigurasi opsi cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set agar hasil permintaan disimpan dalam variabel

    // Eksekusi cURL dan ambil respons
    $response = curl_exec($ch);

    // Periksa apakah ada kesalahan
    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    } else {
        // Respons dari API (misalnya JSON)
        $decodedResponse = json_decode($response, true);

        // Tutup koneksi cURL
        curl_close($ch);

        // Kembalikan respons yang sudah didekode
        return $decodedResponse;
    }

    // Tutup koneksi cURL
    curl_close($ch);
}

?>
