<!DOCTYPE html>
<html>
<head>
  <title>Order Detail - Dewa Rental Bali</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .container {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .order-detail {
      padding: 20px;
    }

    .order-detail h2 {
      margin-top: 0;
      font-weight: bold;
      color: #333;
    }

    .order-detail ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .order-detail li {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    .order-detail li:last-child {
      border-bottom: none;
    }

    .order-detail .label {
      font-weight: bold;
      margin-right: 10px;
      color: #666;
    }

    .order-detail .value {
      font-size: 16px;
      color: #333;
    }

    .order-detail .button {
      background-color: #337ab7;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
    }

    .order-detail .button:hover {
      background-color: #23527c;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="order-detail">
      <h2>Order Detail</h2>
      <ul>
        <li>
          <span class="label">Order ID:</span>
          <span class="value">#1234</span>
          <button class="edit-btn">Edit</button>
        </li>
        <li>
          <span class="label">Car Model:</span>
          <span class="value">Toyota Avanza</span>
          <button class="edit-btn">Edit</button>
        </li>
        <li>
          <span class="label">Rental Period:</span>
          <span class="value">2024-06-10 - 2024-06-15</span>
          <button class="edit-btn">Edit</button>
        </li>
        <li>
          <span class="label">Pickup Location:</span>
          <span class="value">Soekarno-Hatta International Airport</span>
          <button class="edit-btn">Edit</button>
        </li>
        <li>
          <span class="label">Drop-off Location:</span>
          <span class="value">Gambir Station</span>
          <button class="edit-btn">Edit</button>
        </li>
        <li>
          <span class="label">Total Price:</span>
          <span class="value">Rp 2,500,000</span>
        </li>
        <li>
          <span class="label">Payment Method:</span>
          <span class="value">Credit Card</span>
        </li>
        <li>
          <span class="label">Payment Status:</span>
          <span class="value">Paid</span>
        </li>
      </ul>
      <button class="button" id="print-invoice-btn">Print Invoice</button>
    </div>
  </div>

  <script>
    // Add event listener to the "Print Invoice" button
    document.getElementById("print-invoice-btn").addEventListener("click", function() {
      // Print the invoice
      window.print();
    });

    // Add event listener to the edit buttons
    document.querySelectorAll(".edit-btn").forEach(button => {
      button.addEventListener("click", function() {
        // Toggle the edit mode for the corresponding list item
        this.parentNode.classList.toggle("edit-mode");
      });
    });
  </script>
</body>
</html>