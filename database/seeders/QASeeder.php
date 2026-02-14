<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QA;
use Illuminate\Support\Str;

class QASeeder extends Seeder
{
    public function run(): void
    {
        $qas = [
            [
                'question' => 'How do I start implementing AI governance in my organization?',
                'answer' => 'Start with a comprehensive risk assessment of your current AI systems to identify potential vulnerabilities and compliance gaps. Establish clear policies and guidelines that align with your organization\'s values and regulatory requirements. Implement monitoring and auditing mechanisms for your highest-risk models first, focusing on one category at a time rather than trying to solve everything at once. Build a cross-functional governance team that includes technical experts, legal counsel, and business stakeholders. Document all processes and decisions to ensure transparency and accountability.',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now()->subDays(1),
            ],
            [
                'question' => 'What\'s the difference between AI governance and MLOps?',
                'answer' => 'MLOps (Machine Learning Operations) focuses primarily on the technical aspects of deploying, monitoring, and maintaining ML models in production environments. It deals with automation, CI/CD pipelines, model versioning, and infrastructure management. AI governance, on the other hand, covers the broader organizational policies, ethical considerations, risk management, compliance frameworks, and accountability structures. While MLOps ensures your models run efficiently, AI governance ensures they run responsibly. They complement each other - MLOps provides the technical foundation while governance provides the strategic oversight.',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now()->subDays(2),
            ],
            [
                'question' => 'Do I need different governance tools for different types of AI models?',
                'answer' => 'It depends on your specific use cases and organizational needs. Some comprehensive platforms can handle multiple model types (traditional ML, deep learning, NLP, computer vision) with unified governance frameworks. However, specialized tools may be necessary for highly regulated industries or specific model types with unique requirements. Consider factors like your model diversity, risk levels, compliance requirements, and integration needs. Start with a platform that covers your most critical use cases, then expand as needed. The key is ensuring consistent governance principles across all model types, regardless of the tools used.',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(3),
            ],
            [
                'question' => 'How much should I expect to spend on AI governance tools?',
                'answer' => 'Costs vary significantly based on organization size, number of models, feature requirements, and deployment scale. Enterprise platforms typically start at $50,000+ annually for comprehensive solutions with advanced features like automated compliance checking, bias detection, and model monitoring. Mid-market solutions range from $10,000-$30,000 annually. Some open-source tools are available but require significant internal resources for implementation and maintenance. When evaluating ROI, consider the cost of non-compliance (regulatory fines, reputational damage, operational disruptions) which can far exceed tool costs. Many vendors offer tiered pricing or proof-of-concept programs to help you start small.',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(4),
            ],
            [
                'question' => 'What are the key components of an AI governance framework?',
                'answer' => 'A comprehensive AI governance framework should include: 1) Clear policies and standards defining acceptable AI use, 2) Risk assessment and management processes, 3) Data governance and quality controls, 4) Model development and validation procedures, 5) Monitoring and auditing mechanisms, 6) Incident response protocols, 7) Stakeholder accountability structures, 8) Documentation and transparency requirements, 9) Ethical guidelines and bias mitigation strategies, 10) Compliance tracking for relevant regulations. Each component should be tailored to your organization\'s specific context, risk appetite, and regulatory environment.',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'question' => 'How do I measure the effectiveness of my AI governance program?',
                'answer' => 'Track both quantitative and qualitative metrics. Quantitative metrics include: number of models under governance, compliance audit pass rates, incident response times, model performance metrics, and risk scores. Qualitative metrics include: stakeholder satisfaction, cultural adoption, policy effectiveness, and audit feedback. Establish baseline measurements before implementation, then track improvements over time. Regular governance reviews should assess whether policies are being followed, risks are being mitigated, and business objectives are being met. Consider conducting periodic maturity assessments using frameworks like NIST AI RMF or ISO standards.',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(6),
            ],
            [
                'question' => 'What role does explainability play in AI governance?',
                'answer' => 'Explainability is crucial for AI governance as it enables transparency, accountability, and trust. It helps stakeholders understand how AI systems make decisions, which is essential for identifying biases, debugging errors, and meeting regulatory requirements. Different stakeholders need different levels of explanation - executives need high-level business impact, auditors need compliance evidence, and technical teams need detailed model insights. Implement explainability tools like SHAP, LIME, or attention mechanisms depending on your model types. Document explanation methods and ensure they\'re accessible to relevant stakeholders. Remember that explainability requirements vary by use case and risk level.',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(7),
            ],
            [
                'question' => 'How often should I audit my AI models?',
                'answer' => 'Audit frequency depends on model risk level, regulatory requirements, and operational context. High-risk models (affecting safety, legal rights, or critical decisions) should be audited quarterly or even monthly. Medium-risk models may require semi-annual audits, while low-risk models can be audited annually. Additionally, trigger audits when: deploying model updates, detecting performance degradation, receiving user complaints, or when regulations change. Implement continuous monitoring to catch issues between formal audits. Document all audit findings and remediation actions. Consider both internal audits for operational oversight and external audits for independent validation.',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(8),
            ],
            [
                'question' => 'What are the most common AI governance challenges?',
                'answer' => 'Common challenges include: 1) Lack of executive buy-in and resources, 2) Siloed teams with poor communication, 3) Rapidly evolving regulations creating compliance uncertainty, 4) Technical complexity making governance difficult to implement, 5) Balancing innovation speed with governance rigor, 6) Insufficient documentation and knowledge management, 7) Difficulty measuring governance ROI, 8) Resistance to change from data science teams, 9) Limited governance expertise and talent, 10) Integrating governance into existing workflows. Address these by building cross-functional teams, investing in training, starting with pilot programs, and demonstrating quick wins to build momentum.',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now()->subDays(9),
            ],
            [
                'question' => 'How do I handle AI governance for third-party models and APIs?',
                'answer' => 'Third-party AI requires special governance considerations. Establish vendor assessment criteria covering: model transparency, data handling practices, security measures, compliance certifications, and SLA guarantees. Conduct due diligence before procurement, including security reviews and compliance checks. Implement monitoring for third-party model performance and behavior in your environment. Maintain documentation of vendor agreements, data processing terms, and liability clauses. Have contingency plans for vendor failures or service disruptions. Regularly review vendor compliance with your governance standards. For APIs like GPT-4, implement input/output filtering, usage monitoring, and prompt engineering guidelines to maintain control.',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(10),
            ],
        ];

        foreach ($qas as $qaData) {
            $qaData['slug'] = Str::slug($qaData['question']);
            QA::create($qaData);
        }
    }
}
