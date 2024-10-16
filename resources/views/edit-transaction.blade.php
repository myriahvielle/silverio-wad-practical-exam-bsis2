<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT TRANSACTION PAGE</title>
</head>
<body>
    <form action="{{ route('updateTransaction', ['id' =>$transaction->id])}}" method="POST">
        @method('PUT')
        @csrf
        <label for= "transaction_title">Title: </label>
    <input type ="text" id="transaction_title" name="transaction_title" value="{{$transaction->transaction_title}}" required>
    <br>
    <label for = "description">Description: </label>
    <input type ="text" id="description" name="description" value="{{$transaction->description}}" required>
    <br>
    <label for = "status">Status: </label>
    <select type="select" id ="status" name="status" value="{{$transaction->status}}">
        <option value="successful">Successful</option>
        <option value="declined">Declined</option>
    </select>
    <br>
    <label for = "total_amount">Total Amount: </label>
    <input type ="text" id="total_amount" name="total_amount" value="{{$transaction->total_amount}}" required>
    <br>
    <label for = "transaction_number">Transaction Number: </label>
    <input type ="text" id="transaction_number" name="transaction_number" value="{{$transaction->transaction_number}}"required>
    <br>
    <button type="submit">UPDATE</button>
    </form>


    <form action="{{route ('showAllTransactions')}}"method="GET">
        <button type="submit">HOME</button>
    </form>
</body>
</html>
