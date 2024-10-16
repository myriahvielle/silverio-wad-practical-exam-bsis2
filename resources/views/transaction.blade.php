<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTIONS PAGE</title>
</head>
<body>
    <h1>TRANSACTIONS</h1>
    <div>ID: {{ $transaction->id}} </div>
    <div>Title: {{ $transaction->transaction_title}} </div>
    <div>Description: {{ $transaction->description}} </div>
    <div>Status: {{ $transaction->status}} </div>
    <div>Total Amount: {{ $transaction->total_amount}} </div>
    <div>Transaction Number: {{ $transaction->transaction_number}} </div>


    <form action="{{route('editTransaction', ['id' => $transaction->id])}}" method="GET">
        <button type="submit">EDIT</button>
    </form>


    <form action="{{route('deleteTransaction', ['id' => $transaction->id])}}" method="DELETE"
        onSubmit="return confirm('Are you sure?')">
        @method("DELETE")
        @csrf
        <button type="submit">Delete</button>
    </form>
    <form action="{{route ('showAllTransactions', ['id'=> $transaction->id])}}"method="GET">
        <button type="submit">HOME</button>
    </form>
    <hr>


</body>
</html>
