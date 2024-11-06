<?php

namespace DesignPatterns\Estruturais\Adapter;

use DesignPatterns\Estruturais\Adapter\Terceiros\PagFacil;

class PagFacilAdapter extends PagFacil implements Gateway
{

}