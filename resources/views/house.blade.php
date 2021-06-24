@extends('layouts.main')

@section('content')

    <section class="container mt-5">
        <h1>Le mie case vacanze</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">REF</th>
                <th scope="col">Disponibilità</th>
                <th scope="col">Indirizzo</th>
                <th scope="col">CAP</th>
                <th scope="col">Città</th>
                <th scope="col">Stanze</th>
                <th scope="col">Metri Quadri</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Animali Ammessi</th>
                <th scope="col">UAIFAI</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($houses as $house)
                <tr>
                  <td>{{ $house['refenrence'] }}</td>
                  <td>{{ $house['is_available'] === 0 ? 'No': 'Si' }}</td>
                  <td>{{ $house['address'] }}</td>
                  <td>{{ $house['postal_code'] }}</td>
                  <td>{{ $house['city'] }}</td>
                  <td>{{ $house['rooms'] }}</td>
                  <td>{{ $house['square_meters'] }}</td>
                  <td>{{ $house['price'] }}</td>
                  <td>{{ $house['animals'] === 0 ? 'No': 'Si' }}</td>
                  <td>{{ $house['Wi_Fi'] === 0 ? 'No' : 'Si' }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>

    </section>

    <section class="container">{{ $houses->links() }}</section>

@endsection

