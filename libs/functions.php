<?php
/**
 * get provide
 * @param $id
 * @return \Illuminate\Config\Repository|mixed
 */
function getProvide($id)
{
    return config("app.provides.$id");
}

/**
 * get city
 * @param $cityId
 * @return null
 */
function getCity($cityId)
{
    $cities = getAllCities();
    foreach ($cities as $city) {
        if ($city['id'] == $cityId) {
            return $city;
        }
    }
    return null;
}

/**
 * get all provide
 * @return array
 */
function getAllProvides()
{
    return array_column(config("app.provides"), "name");
}


/**
 * get all cities
 * @return mixed
 */
function getAllCities()
{
    return call_user_func_array('array_merge', array_column(config('app.provides'), 'cities'));
}

/**
 * get all cities of provide
 * @param $provideId
 * @return \Illuminate\Config\Repository|mixed
 */
function getAllCitiesOfProvide($provideId)
{
    return config("app.provides.$provideId.cities");
}