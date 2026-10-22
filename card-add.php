<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gift Card | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="site-header">
        <p class="site-title">AirAsia Rewards</p>
    </header>
 
    <main class="page">
        <h1>Add Gift Card</h1>
 
        <form action="card-list.php" method="post" class="form">
            <div class="form-group">
                <label for="cardName">Card Name</label>
                <input type="text" id="cardName" name="cardName" maxlength="100" required>
            </div>
            </br>
            <div class="form-group">
                <label for="cardType">Card Type</label>
                <select id="cardType" name="cardType" required>
                    <option value="">Select Card Type</option>
                    <option value="Retail">Retail</option>
                    <option value="Dining">Dining</option>
                    <option value="Travel">Travel</option>
                    <option value="Entertainment">Entertainment</option>
                </select>
            </div>
            </br>
            <div class="form-group">
                <label for="cardValue">Card Value ($)</label>
                <input type="number" id="cardValue" name="cardValue" min="0" step="0.01" required>
            </div>
            </br>
            <div class="form-group">
                <label for="points">Points Required</label>
                <input type="number" id="points" name="points" min="0" step="1" required>
            </div>
            </br>
            <div class="form-actions">
                <button type="submit">Submit</button>
                <a href="card-list.php" class="button-link">Cancel</a>
            </div>
        </form>
    </main>
</body>
</html>