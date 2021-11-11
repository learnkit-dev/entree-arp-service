<?php

it('can_connect_to_the_service', function () {
    $service = new LearnKit\EntreeArpService\EntreeArpService();

    $schools = $service->schoolList();

    expect($schools)->toBeCollection();
});
