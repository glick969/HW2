<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Gift Card | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="site-header">
        <p class="site-title">AirAsia Rewards</p>
    </header>
 
    <main class="page">
        <h1>Update Gift Card</h1>
 
        <form action="card-list.php" method="post" class="form">
            <input type="hidden" name="cardId" value="1">
 
            <div class="form-group">
                <label for="cardName">Card Name</label>
                <input type="text" id="cardName" name="cardName" value="Gift Card 1" maxlength="100" required>
            </div>
 
            <div class="form-group">
                <label for="cardType">Card Type</label>
                <select id="cardType" name="cardType" required>
                    <option value="">Select Card Type</option>
                    <option value="Travel" selected>Travel</option>
                    <option value="Dining">Dining</option>
                    <option value="Retail">Reatail</option>
                    <option value="Entertainment">Entertainment</option>
                </select>
            </div>
 
            <div class="form-group">
                <label for="cardValue">Card Value ($)</label>
                <input type="number" id="cardValue" name="cardValue" value="50.00" min="0" step="0.01" required>
            </div>
 
            <div class="form-group">
                <label for="points">Points Required</label>
                <input type="number" id="points" name="points" value="5000" min="0" step="1" required>
            </div>
 
            <div class="form-actions">
                <button type="submit">Submit</button>
                <a href="card-details.php" class="button-link">Cancel</a>
            </div>
        </form>
    </main>
</body>
</html>