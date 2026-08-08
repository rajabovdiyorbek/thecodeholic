  <!-- Find a car form -->
  <section class="find-a-car">
    <div class="container">
      <form
        action="{{ route('car.search') }}"
        method="GET"
        class="find-a-car-form card flex p-medium"
      >
        <div class="find-a-car-inputs">
          <div>
            <select id="makerSelect" name="maker_id">
              <option value="">Maker</option>
              <option value="4">Chevrolet</option>
              <option value="2">Ford</option>
              <option value="3">Honda</option>
              <option value="6">Lexus</option>
              <option value="5">Nissan</option>
              <option value="1">Toyota</option>
            </select>
          </div>
          <div>
            <select id="modelSelect" name="model_id">
              @php
                  $models = [
                      ['id' => 50, 'parent' => 5, 'name' => '370Z'],
                      ['id' => 6, 'parent' => 1, 'name' => '4Runner'],
                      ['id' => 22, 'parent' => 3, 'name' => 'Accord'],
                      ['id' => 41, 'parent' => 5, 'name' => 'Altima'],
                      ['id' => 23, 'parent' => 3, 'name' => 'CR-V'],
                      ['id' => 37, 'parent' => 4, 'name' => 'Camaro'],
                      ['id' => 1, 'parent' => 1, 'name' => 'Camry'],
                      ['id' => 21, 'parent' => 3, 'name' => 'Civic'],
                      ['id' => 36, 'parent' => 4, 'name' => 'Colorado'],
                      ['id' => 2, 'parent' => 1, 'name' => 'Corolla'],
                      ['id' => 35, 'parent' => 4, 'name' => 'Cruze'],
                      ['id' => 54, 'parent' => 6, 'name' => 'ES350'],
                      ['id' => 17, 'parent' => 2, 'name' => 'Edge'],
                      ['id' => 32, 'parent' => 4, 'name' => 'Equinox'],
                      ['id' => 12, 'parent' => 2, 'name' => 'Escape'],
                      ['id' => 18, 'parent' => 2, 'name' => 'Expedition'],
                      ['id' => 13, 'parent' => 2, 'name' => 'Explorer'],
                      ['id' => 11, 'parent' => 2, 'name' => 'F-150'],
                      ['id' => 28, 'parent' => 3, 'name' => 'Fit'],
                      ['id' => 20, 'parent' => 2, 'name' => 'Flex'],
                      ['id' => 47, 'parent' => 5, 'name' => 'Frontier'],
                      ['id' => 15, 'parent' => 2, 'name' => 'Fusion'],
                      ['id' => 58, 'parent' => 6, 'name' => 'GS350'],
                      ['id' => 57, 'parent' => 6, 'name' => 'GX460'],
                      ['id' => 26, 'parent' => 3, 'name' => 'HR-V'],
                      ['id' => 3, 'parent' => 1, 'name' => 'Highlander'],
                      ['id' => 56, 'parent' => 6, 'name' => 'IS300'],
                      ['id' => 34, 'parent' => 4, 'name' => 'Impala'],
                      ['id' => 29, 'parent' => 3, 'name' => 'Insight'],
                      ['id' => 55, 'parent' => 6, 'name' => 'LS500'],
                      ['id' => 60, 'parent' => 6, 'name' => 'LX570'],
                      ['id' => 33, 'parent' => 4, 'name' => 'Malibu'],
                      ['id' => 44, 'parent' => 5, 'name' => 'Maxima'],
                      ['id' => 45, 'parent' => 5, 'name' => 'Murano'],
                      ['id' => 14, 'parent' => 2, 'name' => 'Mustang'],
                      ['id' => 59, 'parent' => 6, 'name' => 'NX300'],
                      ['id' => 25, 'parent' => 3, 'name' => 'Odyssey'],
                      ['id' => 30, 'parent' => 3, 'name' => 'Passport'],
                      ['id' => 46, 'parent' => 5, 'name' => 'Pathfinder'],
                      ['id' => 24, 'parent' => 3, 'name' => 'Pilot'],
                      ['id' => 5, 'parent' => 1, 'name' => 'Prius'],
                      ['id' => 4, 'parent' => 1, 'name' => 'RAV4'],
                      ['id' => 62, 'parent' => 6, 'name' => 'RC350'],
                      ['id' => 53, 'parent' => 6, 'name' => 'RX350'],
                      ['id' => 51, 'parent' => 6, 'name' => 'RX400'],
                      ['id' => 52, 'parent' => 6, 'name' => 'RX450'],
                      ['id' => 16, 'parent' => 2, 'name' => 'Ranger'],
                      ['id' => 27, 'parent' => 3, 'name' => 'Ridgeline'],
                      ['id' => 43, 'parent' => 5, 'name' => 'Rogue'],
                      ['id' => 42, 'parent' => 5, 'name' => 'Sentra'],
                      ['id' => 10, 'parent' => 1, 'name' => 'Sequoia'],
                      ['id' => 7, 'parent' => 1, 'name' => 'Sienna'],
                      ['id' => 31, 'parent' => 4, 'name' => 'Silverado'],
                      ['id' => 40, 'parent' => 4, 'name' => 'Suburban'],
                      ['id' => 39, 'parent' => 4, 'name' => 'Tahoe'],
                      ['id' => 19, 'parent' => 2, 'name' => 'Taurus'],
                      ['id' => 48, 'parent' => 5, 'name' => 'Titan'],
                      ['id' => 38, 'parent' => 4, 'name' => 'Traverse'],
                      ['id' => 9, 'parent' => 1, 'name' => 'Tundra'],
                      ['id' => 61, 'parent' => 6, 'name' => 'UX200'],
                      ['id' => 49, 'parent' => 5, 'name' => 'Versa'],
                      ['id' => 8, 'parent' => 1, 'name' => 'Yaris'],
                  ];
              @endphp
              <option value="" style="display: block">Model</option>
              @foreach ($models as $model)
              <option value="{{ $model['id'] }}" data-parent="{{ $model['parent'] }}" style="display: none">
                {{ $model['name'] }}
              </option>
              @endforeach
            </select>
          </div>
          <div>
            <select id="stateSelect" name="state_id">
              <option value="">State/Region</option>
              <option value="4">California</option>
              <option value="2">Kansas</option>
              <option value="1">Ohio</option>
              <option value="5">Oregon</option>
            </select>
          </div>
          <div>
            <select id="citySelect" name="city_id">
              @php
                  $cities = [
                      ['id' => 3, 'parent' => 1, 'name' => 'Carmelstad'],
                      ['id' => 8, 'parent' => 2, 'name' => 'Cormierville'],
                      ['id' => 14, 'parent' => 3, 'name' => 'Dareville'],
                      ['id' => 13, 'parent' => 3, 'name' => 'Demarcotown'],
                      ['id' => 10, 'parent' => 2, 'name' => 'Doylebury'],
                      ['id' => 18, 'parent' => 4, 'name' => 'East Alfonso'],
                      ['id' => 9, 'parent' => 2, 'name' => 'East Ladarius'],
                      ['id' => 23, 'parent' => 5, 'name' => 'Kelvinmouth'],
                      ['id' => 24, 'parent' => 5, 'name' => 'Kemmerchester'],
                      ['id' => 25, 'parent' => 5, 'name' => 'Kunzeview'],
                      ['id' => 6, 'parent' => 2, 'name' => 'Lake Kelsi'],
                      ['id' => 16, 'parent' => 4, 'name' => 'Larsonview'],
                      ['id' => 2, 'parent' => 1, 'name' => 'Lindstad'],
                      ['id' => 5, 'parent' => 1, 'name' => 'Loganshire'],
                      ['id' => 15, 'parent' => 3, 'name' => 'Maximilliaberg'],
                      ['id' => 7, 'parent' => 2, 'name' => 'Monroeside'],
                      ['id' => 17, 'parent' => 4, 'name' => 'Muellerville'],
                      ['id' => 12, 'parent' => 3, 'name' => 'New Bennieville'],
                      ['id' => 1, 'parent' => 1, 'name' => 'New Britneystad'],
                      ['id' => 21, 'parent' => 5, 'name' => 'New Devenmouth'],
                      ['id' => 22, 'parent' => 5, 'name' => 'North Alvah'],
                      ['id' => 20, 'parent' => 4, 'name' => 'Port Johnson'],
                      ['id' => 19, 'parent' => 4, 'name' => 'South Shanellefort'],
                      ['id' => 11, 'parent' => 3, 'name' => 'Toyport'],
                      ['id' => 4, 'parent' => 1, 'name' => 'West Lulu'],
                  ];
              @endphp
              <option value="" style="display: block">City</option>
              @foreach ($cities as $city)
              <option value="{{ $city['id'] }}" data-parent="{{ $city['parent'] }}" style="display: none">
                {{ $city['name'] }}
              </option>
              @endforeach
            </select>
          </div>
          <div>
            <select name="car_type_id">
              <option value="">Type</option>
              <option value="2">Hatchback</option>
              <option value="6">Jeep</option>
              <option value="5">Minivan</option>
              <option value="4">Pickup Truck</option>
              <option value="3">SUV</option>
              <option value="1">Sedan</option>
            </select>
          </div>
          <div>
            <input type="number" placeholder="Year From" name="year_from" />
          </div>
          <div>
            <input type="number" placeholder="Year To" name="year_to" />
          </div>
          <div>
            <input
              type="number"
              placeholder="Price From"
              name="price_from"
            />
          </div>
          <div>
            <input type="number" placeholder="Price To" name="price_to" />
          </div>
          <div>
            <select name="fuel_type_id">
              <option value="">Fuel Type</option>
              <option value="2">Diesel</option>
              <option value="3">Electric</option>
              <option value="1">Gasoline</option>
              <option value="4">Hybrid</option>
            </select>
          </div>
        </div>
        <div>
          <button type="button" class="btn btn-find-a-car-reset">
            Reset
          </button>
          <button class="btn btn-primary btn-find-a-car-submit">
            Search
          </button>
        </div>
      </form>
    </div>
  </section>
  <!--/ Find a car form -->
