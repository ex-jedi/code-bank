<?php
  $ChirpSeo_Auth   = new ChirpSeo_Auth();

  if (isset($locked)) {
    $ChirpSeo_Auth->lockFeature();
  }

  $ChirpSeo_Auth->check();