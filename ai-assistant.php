<?php
$page_title = "AI Assistant - BZASA";
$page_description = "Chat with our AI assistant to get answers about BZASA programs, admissions, and more.";
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: linear-gradient(135deg, var(--tertiary-color) 0%, #0088ff 100%);">
    <div class="page-hero-content">
        <span class="page-badge">
            <i class="fas fa-robot"></i>
            AI Assistant
        </span>
        <h1>Chat with Our <span class="highlight">AI Assistant</span></h1>
        <p class="page-subtitle">Get instant answers to your questions about admissions, programs, campus life, and more.</p>
        <div class="page-breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>AI Assistant</span>
        </div>
    </div>
</section>

<!-- AI Chat Interface -->
<section class="ai-chat-section" style="padding: 80px 0; background: var(--gray-light); min-height: 70vh;">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            <!-- Chat Container -->
            <div style="background: var(--white); border-radius: var(--border-radius-lg); box-shadow: var(--shadow-large); overflow: hidden;">
                <!-- Chat Header -->
                <div style="background: linear-gradient(135deg, var(--primary-color), #ff8c33); padding: 25px 30px; display: flex; align-items: center; gap: 15px;">
                    <div style="width: 50px; height: 50px; background: var(--white); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-seedling" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                    </div>
                    <div style="flex: 1;">
                        <h3 style="color: var(--white); margin: 0; font-size: 1.3rem;">BZASA Bot</h3>
                        <p style="color: rgba(255,255,255,0.9); margin: 0; font-size: 0.9rem;">
                            <span style="display: inline-block; width: 8px; height: 8px; background: #28a745; border-radius: 50%; margin-right: 5px;"></span>
                            Online now
                        </p>
                    </div>
                    <button id="clear-chat" style="background: rgba(255,255,255,0.2); border: none; padding: 10px 20px; border-radius: 50px; color: var(--white); cursor: pointer; transition: var(--transition);">
                        <i class="fas fa-trash"></i> Clear
                    </button>
                </div>

                <!-- Chat Messages -->
                <div id="chat-messages" style="height: 400px; overflow-y: auto; padding: 30px; background: var(--gray-light);">
                    <!-- Welcome Message -->
                    <div style="display: flex; gap: 15px; margin-bottom: 25px;">
                        <div style="width: 40px; height: 40px; min-width: 40px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-seedling" style="color: var(--white); font-size: 1rem;"></i>
                        </div>
                        <div style="flex: 1;">
                            <div style="background: var(--white); padding: 15px 20px; border-radius: 0 15px 15px 15px; box-shadow: var(--shadow-small);">
                                <p style="margin: 0; color: var(--text-dark); line-height: 1.6;">
                                    Hello! 👋 Welcome to BZASA. I'm your AI assistant here to help you with any questions about our agricultural school. How can I assist you today?
                                </p>
                            </div>
                            <div style="display: flex; gap: 10px; margin-top: 15px; flex-wrap: wrap;">
                                <button class="quick-question" data-question="What programs do you offer?" style="background: var(--white); border: 1px solid var(--primary-color); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-size: 0.85rem; cursor: pointer; transition: var(--transition);">
                                    <i class="fas fa-graduation-cap"></i> Programs
                                </button>
                                <button class="quick-question" data-question="What are the admission requirements?" style="background: var(--white); border: 1px solid var(--tertiary-color); color: var(--tertiary-color); padding: 8px 16px; border-radius: 20px; font-size: 0.85rem; cursor: pointer; transition: var(--transition);">
                                    <i class="fas fa-file-alt"></i> Admissions
                                </button>
                                <button class="quick-question" data-question="Tell me about campus life" style="background: var(--white); border: 1px solid var(--secondary-color); color: var(--secondary-color); padding: 8px 16px; border-radius: 20px; font-size: 0.85rem; cursor: pointer; transition: var(--transition);">
                                    <i class="fas fa-home"></i> Campus Life
                                </button>
                                <button class="quick-question" data-question="What scholarships are available?" style="background: var(--white); border: 1px solid #28a745; color: #28a745; padding: 8px 16px; border-radius: 20px; font-size: 0.85rem; cursor: pointer; transition: var(--transition);">
                                    <i class="fas fa-dollar-sign"></i> Scholarships
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chat Input -->
                <div style="padding: 20px 30px; background: var(--white); border-top: 1px solid var(--gray-medium);">
                    <form id="chat-form" style="display: flex; gap: 15px;">
                        <input type="text" id="chat-input" placeholder="Type your message here..." style="flex: 1; padding: 15px 20px; border: 2px solid var(--gray-medium); border-radius: 50px; font-size: 1rem; transition: var(--transition);" required>
                        <button type="submit" style="background: var(--primary-color); color: var(--white); padding: 15px 30px; border: none; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: var(--transition);">
                            <i class="fas fa-paper-plane"></i> Send
                        </button>
                    </form>
                    <p style="text-align: center; color: var(--text-light); font-size: 0.85rem; margin-top: 15px;">
                        <i class="fas fa-info-circle"></i> Our AI assistant is here to help 24/7. For complex inquiries, please contact our admissions office.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AI Features -->
<section class="ai-features" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-magic"></i>
                Features
            </span>
            <h2>How Our AI Can <span class="highlight">Help You</span></h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 50px;">
            <div style="background: var(--gray-light); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: linear-gradient(135deg, var(--primary-color), #ff8c33); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-graduation-cap" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: var(--secondary-color);">Program Information</h3>
                <p style="color: var(--text-light); line-height: 1.7;">Get detailed information about our certificate, diploma, and degree programs in agriculture.</p>
            </div>

            <div style="background: var(--gray-light); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: linear-gradient(135deg, var(--tertiary-color), #0088ff); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-file-signature" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: var(--secondary-color);">Application Guidance</h3>
                <p style="color: var(--text-light); line-height: 1.7;">Learn about the application process, required documents, and important deadlines.</p>
            </div>

            <div style="background: var(--gray-light); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: linear-gradient(135deg, var(--secondary-color), #555555); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-dollar-sign" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: var(--secondary-color);">Financial Aid</h3>
                <p style="color: var(--text-light); line-height: 1.7;">Discover scholarship opportunities, tuition fees, and payment plans available to students.</p>
            </div>
        </div>
    </div>
</section>

<style>
.quick-question:hover {
    background: var(--primary-color) !important;
    color: var(--white) !important;
}
</style>

<script>
// AI Chat functionality
document.addEventListener('DOMContentLoaded', function() {
    const chatForm = document.getElementById('chat-form');
    const chatInput = document.getElementById('chat-input');
    const chatMessages = document.getElementById('chat-messages');
    const clearChat = document.getElementById('clear-chat');
    const quickQuestions = document.querySelectorAll('.quick-question');

    // AI Response knowledge base
    const aiResponses = {
        'programs': {
            keywords: ['program', 'course', 'degree', 'certificate', 'diploma', 'offer'],
            response: `BZASA offers a variety of programs in agriculture:

📚 **Certificate Programs** (6-12 months)
• Certificate in General Agriculture
• Certificate in Crop Production
• Certificate in Animal Husbandry

🎓 **Diploma Programs** (2 years)
• Diploma in Agriculture
• Diploma in Agribusiness Management
• Diploma in Horticulture
• Diploma in Agricultural Engineering

🎓 **Degree Programs** (3-4 years)
• Bachelor of Science in Agriculture
• Bachelor of Science in Agribusiness

Would you like more details about any specific program?`
        },
        'admissions': {
            keywords: ['admission', 'apply', 'requirement', 'eligibility', 'entry'],
            response: `Here are the admission requirements for BZASA:

✅ **General Requirements:**
• WASSCE/GCSE certificates (minimum 5 passes)
• English Language proficiency
• Mathematics proficiency
• Valid identification

📋 **Required Documents:**
• Application form (online or paper)
• Academic certificates
• Birth certificate
• Passport-sized photos
• Medical certificate

📅 **Application Periods:**
• Fall Semester: January - August
• Spring Semester: September - December

Ready to apply? Visit our Admissions page!`
        },
        'campus': {
            keywords: ['campus', 'life', 'accommodation', 'hostel', 'facility', 'sport', 'activity'],
            response: `Life at BZASA is vibrant and fulfilling! 🏫

🏠 **Accommodation:**
• Modern dormitories on campus
• Separate hostels for male and female students
• Affordable pricing

🌱 **Campus Facilities:**
• Modern classrooms and laboratories
• Agricultural demonstration farms
• Library and study spaces
• Computer labs

🎭 **Student Activities:**
• Agricultural clubs and societies
• Sports and recreation
• Cultural events
• Community outreach programs

Join us for an unforgettable learning experience!`
        },
        'scholarship': {
            keywords: ['scholarship', 'financial', 'aid', 'grant', 'tuition', 'fee', 'cost', 'money'],
            response: `BZASA offers various financial support options: 💰

🎓 **Scholarships:**
• Merit-based scholarships for top students
• Need-based financial assistance
• Government partnership programs
• Agricultural industry sponsorships

💳 **Payment Options:**
• Installment payment plans
• Early bird discounts
• Sibling discounts

📞 **Contact Financial Aid:**
For detailed information about scholarships and payment plans, please contact our admissions office or visit the Financial Aid section on our website.`
        },
        'contact': {
            keywords: ['contact', 'phone', 'email', 'location', 'address', 'visit'],
            response: `Here's how to reach us: 📞

📍 **Location:**
Bendu Zinnah Village, Kenema District, Sierra Leone

📞 **Phone:**
+232 00 000 000

📧 **Email:**
info@bzasa.edu.sl
admissions@bzasa.edu.sl

🕐 **Office Hours:**
Monday - Friday: 8AM - 5PM
Saturday: 9AM - 1PM

Visit our Contact page for more details or to schedule a campus tour!`
        },
        'default': {
            response: `Thank you for your question! While I'm a simple AI assistant, I can help with common questions about BZASA.

Here are some topics I can assist with:
• Programs and courses we offer
• Admission requirements
• Campus life and facilities
• Scholarships and financial aid
• Contact information

For specific inquiries, you can:
📧 Email us at info@bzasa.edu.sl
📞 Call us at +232 00 000 000

Would you like to try one of the quick question buttons above?`
        }
    };

    function findResponse(message) {
        const lowerMessage = message.toLowerCase();
        
        for (const [key, data] of Object.entries(aiResponses)) {
            if (key === 'default') continue;
            for (const keyword of data.keywords) {
                if (lowerMessage.includes(keyword)) {
                    return data.response;
                }
            }
        }
        return aiResponses.default.response;
    }

    function addMessage(message, isUser = false) {
        const messageDiv = document.createElement('div');
        messageDiv.style.display = 'flex';
        messageDiv.style.gap = '15px';
        messageDiv.style.marginBottom = '25px';
        messageDiv.style.justifyContent = isUser ? 'flex-end' : 'flex-start';

        if (isUser) {
            messageDiv.innerHTML = `
                <div style="flex: 1; display: flex; justify-content: flex-end;">
                    <div style="background: var(--primary-color); color: var(--white); padding: 15px 20px; border-radius: 15px 0 15px 15px; max-width: 70%;">
                        <p style="margin: 0; line-height: 1.6;">${message}</p>
                    </div>
                </div>
                <div style="width: 40px; height: 40px; min-width: 40px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-user" style="color: var(--white); font-size: 1rem;"></i>
                </div>
            `;
        } else {
            messageDiv.innerHTML = `
                <div style="width: 40px; height: 40px; min-width: 40px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-seedling" style="color: var(--white); font-size: 1rem;"></i>
                </div>
                <div style="flex: 1;">
                    <div style="background: var(--white); padding: 15px 20px; border-radius: 0 15px 15px 15px; box-shadow: var(--shadow-small);">
                        <p style="margin: 0; color: var(--text-dark); line-height: 1.6; white-space: pre-wrap;">${message}</p>
                    </div>
                </div>
            `;
        }

        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function showTypingIndicator() {
        const typingDiv = document.createElement('div');
        typingDiv.id = 'typing-indicator';
        typingDiv.style.display = 'flex';
        typingDiv.style.gap = '15px';
        typingDiv.style.marginBottom = '25px';
        typingDiv.innerHTML = `
            <div style="width: 40px; height: 40px; min-width: 40px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-seedling" style="color: var(--white); font-size: 1rem;"></i>
            </div>
            <div style="background: var(--white); padding: 15px 20px; border-radius: 0 15px 15px 15px; box-shadow: var(--shadow-small);">
                <div style="display: flex; gap: 5px;">
                    <div style="width: 8px; height: 8px; background: var(--text-light); border-radius: 50%; animation: bounce 1.4s infinite ease-in-out;"></div>
                    <div style="width: 8px; height: 8px; background: var(--text-light); border-radius: 50%; animation: bounce 1.4s infinite ease-in-out 0.2s;"></div>
                    <div style="width: 8px; height: 8px; background: var(--text-light); border-radius: 50%; animation: bounce 1.4s infinite ease-in-out 0.4s;"></div>
                </div>
            </div>
        `;
        chatMessages.appendChild(typingDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function removeTypingIndicator() {
        const typing = document.getElementById('typing-indicator');
        if (typing) typing.remove();
    }

    chatForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const message = chatInput.value.trim();
        if (!message) return;

        addMessage(message, true);
        chatInput.value = '';

        showTypingIndicator();

        setTimeout(() => {
            removeTypingIndicator();
            const response = findResponse(message);
            addMessage(response);
        }, 1000);
    });

    quickQuestions.forEach(btn => {
        btn.addEventListener('click', function() {
            const question = this.getAttribute('data-question');
            chatInput.value = question;
            chatForm.dispatchEvent(new Event('submit'));
        });
    });

    clearChat.addEventListener('click', function() {
        chatMessages.innerHTML = `
            <div style="display: flex; gap: 15px; margin-bottom: 25px;">
                <div style="width: 40px; height: 40px; min-width: 40px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-seedling" style="color: var(--white); font-size: 1rem;"></i>
                </div>
                <div style="flex: 1;">
                    <div style="background: var(--white); padding: 15px 20px; border-radius: 0 15px 15px 15px; box-shadow: var(--shadow-small);">
                        <p style="margin: 0; color: var(--text-dark); line-height: 1.6;">
                            Chat cleared! How can I help you today?
                        </p>
                    </div>
                    <div style="display: flex; gap: 10px; margin-top: 15px; flex-wrap: wrap;">
                        <button class="quick-question" data-question="What programs do you offer?" style="background: var(--white); border: 1px solid var(--primary-color); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-size: 0.85rem; cursor: pointer; transition: var(--transition);">
                            <i class="fas fa-graduation-cap"></i> Programs
                        </button>
                        <button class="quick-question" data-question="What are the admission requirements?" style="background: var(--white); border: 1px solid var(--tertiary-color); color: var(--tertiary-color); padding: 8px 16px; border-radius: 20px; font-size: 0.85rem; cursor: pointer; transition: var(--transition);">
                            <i class="fas fa-file-alt"></i> Admissions
                        </button>
                        <button class="quick-question" data-question="Tell me about campus life" style="background: var(--white); border: 1px solid var(--secondary-color); color: var(--secondary-color); padding: 8px 16px; border-radius: 20px; font-size: 0.85rem; cursor: pointer; transition: var(--transition);">
                            <i class="fas fa-home"></i> Campus Life
                        </button>
                        <button class="quick-question" data-question="What scholarships are available?" style="background: var(--white); border: 1px solid #28a745; color: #28a745; padding: 8px 16px; border-radius: 20px; font-size: 0.85rem; cursor: pointer; transition: var(--transition);">
                            <i class="fas fa-dollar-sign"></i> Scholarships
                        </button>
                    </div>
                </div>
            </div>
        `;
        
        // Re-attach event listeners to new quick question buttons
        document.querySelectorAll('.quick-question').forEach(btn => {
            btn.addEventListener('click', function() {
                const question = this.getAttribute('data-question');
                chatInput.value = question;
                chatForm.dispatchEvent(new Event('submit'));
            });
        });
    });
});
</script>

<style>
@keyframes bounce {
    0%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-8px); }
}
</style>

<?php include 'includes/footer.php'; ?>