<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTIONS PAGE</title>
</head>
<body>
    <h1>TRANSACTIONS</h1>
    <form action="{{route('createTransaction')}}" method="GET">
        <button type="submit">CREATE</button>
    </form>
   
    @foreach ($transactions as $transaction )
    <div>ID: {{ $transaction->id}} </div>
    <div>Title: {{ $transaction->transaction_title}} </div>
    <div>Description: {{ $transaction->description}} </div>
    <div>Status: {{ $transaction->status}} </div>
    <div>Total Amount: {{ $transaction->total_amount}} </div>
    <div>Transaction Number: {{ $transaction->transaction_number}} </div>


    <form action="{{route('viewTransaction', ['id' => $transaction->id])}}" method="GET">
        <button type="submit">VIEW</button>
    </form>
    @endforeach
   
   
</body>
</html>
